<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_id',
        'attended_day',
        'started_at',
        'ended_at',
    ];
    protected $dates = [
        'started_at',
        'ended_at',
    ];
    //protected $dateFormat = 'H:i:s';
    public $timestamps = false;
}
