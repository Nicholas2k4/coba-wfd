<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|integer',
            'passanger_name' => 'required|string',
            'passanger_phone' => 'required|string|size:14',
            'seat_number' => 'required|string|size:3',
        ]);

        $request['boarding_time'] = null;
        Ticket::create($request->all());

        return redirect('/flights')->with('success','Sukses booking tiket!');
    }

    public function delete($id)
    {   
        $ticket = Ticket::find($id);
        if($ticket->is_boarding == 0){
            $ticket->delete();
        }else{
            return redirect('/flights')->with('error','Tidak dapat menghapus tiket yang sudah boarding!');
        }
        
        return redirect('/flights')->with('success','Sukses menghapus tiket!');
    }

    public function board($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->boarding_time = now();
        $ticket->is_boarding = 1;
        $ticket->save();

        return redirect('/flights')->with('success','Berhasil boarding!');
    }
}
