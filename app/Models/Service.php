<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $appends = [
        'cost',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'price'
    ];

    public function schedules(){
        return $this->hasMany(ServiceSchedule::class);
    }

    public function getCostAttribute(){
        return '$' . number_format($this->price, 2);
    }
}
