<?php
use App\Models\Reservation;

function latest_reservation(){
    $latest_reservation = Reservation::where('user_id',auth()->id())->with('ticket')->limit(3)->latest()->get();
    return $latest_reservation;
}