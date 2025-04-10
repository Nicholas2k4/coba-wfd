@extends('templates.main')

@section('content')
    <div class="px-8">
        @php
            $boardings = 0;
            foreach ($flight->tickets as $ticket) {
                if ($ticket->is_boarding == 1) {
                    $boardings++;
                }
            }
        @endphp

        <div class="flex">
            <h1 class="text-3xl font-bold">Ticket Booking for {{ $flight->flight_code }}</h1>
            <h2 class="text-3xl font-bold ml-auto">{{ count($flight->tickets) }} passangers , {{ $boardings }} boardings
            </h2>
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

        <h1 class="font-bold mt-4 text-2xl">Passanger List</h1>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Passanger Name</th>
                    <th class="border px-4 py-2">Passanger Phone</th>
                    <th class="border px-4 py-2">Seat Number</th>
                    <th class="border px-4 py-2">Boarding</th>
                    <th class="border px-4 py-2">Delete</th>
                </tr>
                @foreach ($flight->tickets as $ticket)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $ticket->passanger_name }}</td>
                        <td class="border px-4 py-2">{{ $ticket->passanger_phone }}</td>
                        <td class="border px-4 py-2">{{ $ticket->seat_number }}</td>
                        @if ($ticket->is_boarding == 1)
                            <td class="border px-4 py-2">{{ $ticket->boarding_time }}</td>
                        @else
                            <td class="border px-4 py-2">
                                <form action="{{ route('ticket.board', $ticket->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Board</button>
                                </form>
                            </td>
                        @endif
                        <td class="border px-4 py-2">
                            <form action="{{ route('ticket.delete', $ticket->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection
