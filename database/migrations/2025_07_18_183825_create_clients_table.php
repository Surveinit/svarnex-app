<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->dateTime('date_time'); // Storing as datetime
            $table->string('status_code', 10); // Foreign key to Status.status_code
            $table->timestamps();

            $table->foreign('status_code')
                  ->references('status_code')
                  ->on('statuses')
                  ->onDelete('restrict'); // Or 'cascade' if you want to delete clients if a status is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
