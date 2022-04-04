<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_id',
        'rest_attended_day',
        'rest_started_at',
        'rest_ended_at',
    ];
}
