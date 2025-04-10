<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::create([
            'flight_code' => 'A0001',
            'origin' => 'SBY',
            'destination' => 'CGK',
            'departure_time' => '2023-06-10 08:00:00',
            'arrival_time' => '2023-06-10 10:00:00',
        ]);
        Flight::create([
            'flight_code' => 'A0002',
            'origin' => 'CHN',
            'destination' => 'JPN',
            'departure_time' => '2023-07-10 08:00:00',
            'arrival_time' => '2023-07-10 10:00:00',
        ]);
        Flight::create([
            'flight_code' => 'A0003',
            'origin' => 'JKT',
            'destination' => 'MDN',
            'departure_time' => '2023-08-10 08:00:00',
            'arrival_time' => '2023-08-10 10:00:00',
        ]);
        Flight::create([
            'flight_code' => 'A0004',
            'origin' => 'MDN',
            'destination' => 'JKT',
            'departure_time' => '2023-09-10 08:00:00',
            'arrival_time' => '2023-09-10 10:00:00',
        ]);
        Flight::create([
            'flight_code' => 'A0005',
            'origin' => 'MYR',
            'destination' => 'SGP',
            'departure_time' => '2023-10-10 08:00:00',
            'arrival_time' => '2023-10-10 10:00:00',
        ]);
    }
}
