@extends('templates.main')

@section('content')
    <div class="p-5 grid grid-cols-12">
        @foreach ($flights as $flight)
            <div class="col-span-12 md:col-span-6 lg:col-span-4 p-3">
                <div class="bg-blue-300 p-5 rounded-lg">
                    <div class="flex">
                        <h1 class="font-bold">{{ $flight->flight_code }}</h1>
                        <h2 class="ml-auto">{{ $flight->origin }} -> {{ $flight->destination }}</h2>
                    </div>

                    <p class="mt-3">Departure</p>
                    <p class="font-bold">{{ $flight->departure_time }}</p>
                    <p>Arrived</p>
                    <p class="font-bold">{{ $flight->arrival_time }}</p>

                    <div class="flex mt-5">
                        <a href="{{ route('flights.book', $flight->id) }}" class="px-5 py-2 font-bold rounded-lg bg-blue-500 text-white">Book Ticket</a>
                        <a href="{{ route('flights.ticket', $flight->id) }}" class="px-5 py-2 font-bold rounded-lg ml-auto bg-blue-500 text-white">View
                            Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
