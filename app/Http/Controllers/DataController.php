<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $name = '' . Auth::user()->name . '';
        $items = Attendance::all();
        $items = Attendance::simplePaginate(5);

        
        return view('data', [
            'items' => $items,
            'name'=>$name,
    ]);
    }
}
