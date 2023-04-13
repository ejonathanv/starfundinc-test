<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Switch_;

class ServiceSchedule extends Model
{
    use HasFactory;

    protected $appends = [
        'day',
    ];

    protected $visible = [
        'id',
        'day',
        'start_at',
        'end_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getDayAttribute(){
        switch ($this->day_of_week) {
            case 0:
                return 'Monday';
            case 1:
                return 'Tuesday';
            case 2:
                return 'Wednesday';
            case 3:
                return 'Thursday';
            case 4:
                return 'Friday';
            case 5:
                return 'Saturday';
            case 6:
                return 'Sunday';
        }
    }
}
