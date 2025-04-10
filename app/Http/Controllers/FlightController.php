<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::all();
        return view("flight.index", ['flights' => $flights]);
    }

    public function ticket($id)
    {
        $flight = Flight::find($id);
        return view('flight.ticket', [
            'flight' => $flight
        ]);
    }

    public function book($id)
    {
        $flight = Flight::find($id);
        return view('flight.book', ['flight' => $flight]);
    }
}
