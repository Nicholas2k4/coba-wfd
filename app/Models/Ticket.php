<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;

class Ticket extends Model
{
    protected $fillable = [
        'flight_id',
        'passanger_name',
        'passanger_phone',
        'seat_number',
        'is_boarding',
        'boarding_time'
    ];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
