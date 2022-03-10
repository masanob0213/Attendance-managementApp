<?php

namespace App\Http\Controllers;

use App\Models\Attendance;

use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        $items = Attendance::simplePaginate(5);
        return view('date', ['items' => $items]);
    }
}
