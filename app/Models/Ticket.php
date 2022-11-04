<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'meet_up_date' => 'datetime',
        'tag_1' => 'array',
        'tag_2' => 'array'
    ];
    public function ticketImage()
    {
        return asset('storage/ticket/' . $this->image);
    }

}
