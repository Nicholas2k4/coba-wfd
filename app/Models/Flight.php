<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Flight extends Model
{
    protected $fillable = [
        'flight_code',
        'origin',
        'destination',
        'departure_time',
        'arrival_time',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
