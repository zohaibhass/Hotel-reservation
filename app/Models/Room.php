<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomtype()
    {
        return $this->hasOne(Roomtype::class);
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
