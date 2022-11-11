<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Reservation;

class TicketController extends Controller
{
    //
    public function tickets(){
        $tickets = Ticket::paginate(5);
        $reservation = Reservation::select('ticket_id')->where('user_id',auth()->id())->pluck('ticket_id')->toArray();
        return view('web.tickets',compact('tickets','reservation'));
    }
    public function reserve_ticket(Request $request){
        $addReservation = Reservation::create([
            'user_id' => auth()->id(),
            'ticket_id' => $request->id,
            'status' => 'pending'
        ]);
        if($addReservation){
            return response()->json(['Success'=>'true','Msg'=>__('translation.Ticket Reserved Successfully')]);
        }else{
            return response()->json(['Success'=>'false','Msg'=>__('translation.An Unknown Error Exist , Please try again')]);
        }
    }
    public function reservations(){
        $reservations = Reservation::where('user_id',auth()->id())->with('ticket')->get();
        return view('web.reservations',compact('reservations'));
    }
    public function send_mail(){
        $sendMail = \Mail::send('emails.testmail',[],function ($message) {
            $message->to('qasimmansoor683@gmail.com');
            $message->subject('Email Verification Mail');
        });
        dd($sendMail);
    }
}
