<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            [
                'status_code' => 'NL',
                'status' => 'New Lead',
                'description' => 'Client has just submitted a new booking request.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_code' => 'MT',
                'status' => 'Meeting Scheduled',
                'description' => 'A meeting has been scheduled with the client.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_code' => 'PD',
                'status' => 'Product Delivered',
                'description' => 'Product has been delivered to the client.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status_code' => 'CL',
                'status' => 'Client Lost',
                'description' => 'Client did not proceed with the service/product.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
