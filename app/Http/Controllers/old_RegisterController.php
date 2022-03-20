<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function top()
    {
        return view('/auth/register');
    }

    public function create()
    {
        return view('/auth/register');
    }
    public function add(Request $request)
    {
        $this->validate($request, Member::$rules);
        $form = $request->all();
        Member::create($form);
        return redirect('/register');
    }
}
