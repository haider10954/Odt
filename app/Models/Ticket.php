<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'meet_up_date' => 'datetime'
    ];
    public function ticketImage()
    {
        return asset('storage/ticket/' . $this->image);
    }

}
