@extends('templates.main')

@section('content')
    <div class="px-8">
        <div class="flex">
            <h1 class="text-3xl font-bold">Ticket Booking for</h1>
            <h2 class="text-3xl font-bold ml-2">{{ $flight->flight_code }}</h2>
        </div>

        <hr>

        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-4">
                {{ $flight->origin }}->{{ $flight->destination }}
            </div>
            <div class="col-span-12 md:col-span-4 md:text-center">
                Departure <b>{{ $flight->departure_time }}</b>
            </div>
            <div class="col-span-12 md:col-span-4 md:text-right">
                Arrived <b>{{ $flight->arrival_time }}</b>
            </div>
        </div>

        <form action="{{ route('ticket.submit') }}" class="mt-4" method="POST">
            @csrf
            <input type="hidden" name="flight_id" value="{{ $flight->id }}">
            <div class="mb-5">
                <label for="passanger_name" class="form-label">Passanger Name</label>
                <input type="text" name="passanger_name" id="passanger_name" class="ml-3 form-control bg-slate-200 rounded px-5 py-1">
            </div>
    
            <div class="mb-5">
                <label for="passanger_phone" class="form-label mt-5">Passanger Phone</label>
                <input type="text" name="passanger_phone" id="passanger_phone" class="ml-3 form-control bg-slate-200 rounded px-5 py-1">
            </div>
    
            <div class="mb-5">
                <label for="seat_number" class="form-label">Seat Number</label>
                <input type="text" name="seat_number" id="seat_number" class="ml-3 form-control bg-slate-200 rounded px-5 py-1">
            </div>
    
            <a href="{{ route('flights') }}" class="bg-red-500 rounded px-4 py-2 text-white">Cancel</a>
            <button class="ml-4 bg-green-500 rounded px-4 py-1 text-white">Book</button>
        </form>
    </div>
@endsection