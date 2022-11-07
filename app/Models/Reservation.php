<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\User;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    public function ticket()
    {
        return $this->hasOne(Ticket::class,'id','ticket_id');
    }

    public function getStatus()
    {
        if($this->status == 'completed')
        {
            return 'success';
        }
        if($this->status == 'pending')
        {
            return 'danger';
        }
        if($this->status == 'in-progress')
        {
            return 'warning';
        }
    }

}
