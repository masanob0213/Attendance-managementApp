<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;

class StampController extends Controller
{
    public function button()
    { {
            $msg = '' . Auth::user()->name . '';
            $id = '' . Auth::user()->id . '';
            $attended_day = new Carbon();;
            //0時0分を取って来てるので要修正
            $ended_at = Carbon::now();;
        }

        return view('stamp', [
            'message' => $msg,
            'id' => $id,
            'attended_day' => $attended_day,
            'ended_at' => $ended_at,
        ]);
    }

    public function start(Request $request)
    {
        $form = $request->all();
        Attendance::create($form);
        return redirect('/stamp');
    }

    public function end(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Attendance::where('users_id',  $request->users_id and 'attended_day', $request->attended_day)->update($form);
        return redirect('/stamp');
    }
    public function rest(Request $request)
    {
        $form = $request->all();
        Rest::create($form);
        return redirect('/stamp');
    }
    public function resume(Request $request)
    {
        //$form = $request->all();
        //unset($form['_token']);
        //Attendance::where('id', $request->id)->update($form);
        return redirect('/stamp');
    }
}
