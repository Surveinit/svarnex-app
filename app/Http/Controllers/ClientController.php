<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display the home page with the client registration form.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created client in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
                'phone' => ['required', 'string'],
                'date_time' => ['required', 'date_format:Y-m-d H:i'],
            ]);

            $selectedDateTime = Carbon::parse($validatedData['date_time']);
            $minSelectableDateTime = Carbon::now()->addHours(3);

            if ($selectedDateTime->lessThan($minSelectableDateTime)) {
                throw ValidationException::withMessages([
                    'date_time' => 'The selected date and time must be at least three hours after the current time.',
                ]);
            }

            Client::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'date_time' => $validatedData['date_time'],
                'status_code' => 'NL', // Default status: New Lead
            ]);

            return redirect()->back()->with('success', 'Your booking has been successfully submitted!');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
}
