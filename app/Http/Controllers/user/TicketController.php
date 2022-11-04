<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    //
    public function tickets(){
        $tickets = Ticket::get();
        return view('web.tickets',compact('tickets'));
    }
}
