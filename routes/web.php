<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController; // Add this line
use App\Http\Controllers\AdminClientController; // Add this line for admin
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClientController::class, 'index'])->name('home');
Route::post('/clients', [ClientController::class, 'store'])->name('client.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/clients', [AdminClientController::class, 'allClients'])->name('clients');
    Route::get('/pending', [AdminClientController::class, 'pendingClients'])->name('pending');
    Route::get('/pending/{client}', [AdminClientController::class, 'showClient'])->name('client.show');
    Route::patch('/client/{client}/status', [AdminClientController::class, 'updateStatus'])->name('client.updateStatus');
});

require __DIR__.'/auth.php';
