<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable  = [
        'users_id',
        'attended_day',
        'started_at',
        'ended_at',
    ];
    public $timestamps = false;
}
