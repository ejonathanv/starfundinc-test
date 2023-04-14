<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookableSlot extends Model
{
    use HasFactory;

    protected $casts = [
        'start_at' => 'datetime:d M, Y H:i',
        'end_at' => 'datetime:d M, Y H:i',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

}
