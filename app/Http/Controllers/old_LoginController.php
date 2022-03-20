<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function input()
    {
        $text = ['text' => 'ログインして下さい。'];
        return view('/login');
    }

    public function send(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password
        ])) {
            return redirect('/stamp');
            $text =   Auth::user()->name . 'さんがログインしました';
        } else {
            return view('/login');
        }
    }
}
