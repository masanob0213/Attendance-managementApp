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
            $name = Auth::user()->name;
            $id = Auth::user()->id;
            $attended_day = Carbon::now()->toDateString();
            //0時0分を取って来てるので要修正
        }

        return view('stamp', [
            'message' => null,
            'name' => $name,
            'users_id' => $id,
            'attended_day' => $attended_day,
        ]);
    }

    public function start(Request $request)
    {
        $name = Auth::user()->name;
        $users_id = Auth::user()->id;
        //dd($users_id);
        $attended_day = new Carbon('today');
        //dd($attended_day);
        $msg_start_true = '既に開始しています。';
        $data = Attendance::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->first();
        //dd($data);

        $msg_start_true = '勤務を開始しました';
        $msg_start_false = '既に開始しています。';

        if (is_null($data)) {
            Attendance::create([
                'users_id' => $users_id,
                'attended_day' => $attended_day,
            ]);
            return view('/stamp', [
                'name' => $name,
                'message' => $msg_start_true,
            ]);
        } else {
            return view('stamp', [
                'name' => $name,
                'message' => $msg_start_false,
            ]);
        }
    }

    public function end()
    {
        $name = Auth::user()->name;
        $users_id = Auth::user()->id;
        $attended_day = new Carbon('today');
        $ended_at = Carbon::now();

        $data1 = Attendance::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->whereNull('ended_at')
            ->first();
        //dd($data);
        $data2 = Rest::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->whereNull('ended_at')
            ->first();

        $msg_end_true = '勤務を終了しました';
        $msg_end_false = '勤務を開始してください';
        $msg_end_rest = '休憩を終了してください';

        //if (isset($data1) && is_null($data2)) {
        //  $data1->update(['ended_at' => $ended_at]);
        //return view('/stamp', [
        //  'name' => $name,
        //'message' => $msg_end_true,
        //]);
        //} elseif (isset($data1) && isset($data2)) {
        //  return view('/stamp', [
        //       'name' => $name,
        //     'message' => $msg_end_rest,
        //]);
        //} else {
        //  return view('/stamp', [
        //    'name' => $name,
        //  'message' => $msg_end_false,
        // ]);
        //}

        if (isset($data1)) {
            if (is_null($data2)) {
                $data1->update(['ended_at' => $ended_at]);
                return view('/stamp', [
                    'name' => $name,
                    'message' => $msg_end_true,
                ]);
            } else {
                return view('/stamp', [
                    'name' => $name,
                    'message' => $msg_end_rest,
                ]);
            }
        } else {
            return view('/stamp', [
                'name' => $name,
                'message' => $msg_end_false,
            ]);
        }
    }
    public function rest()
    {
        $name = Auth::user()->name;
        $users_id = Auth::user()->id;
        $attended_day = new Carbon('today');

        //勤務開始中のカラム
        $data1 = Attendance::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->whereNull('ended_at')
            ->first();
        //休憩終了済みのカラム
        $data2 = Rest::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->first();
        //dd($data1);
        //休憩開始中のカラム
        $data3 = Rest::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->whereNull('ended_at')
            ->first();
        //dd($data2);

        $msg_rest_true = '休憩を開始しました。';
        $msg_rest_false = '休憩終了してください';
        $msg_works_false = '勤務を開始してください';

        //休憩開始前、且つ休憩開始中のカラムが存在しない
        //if (isset($data1) && is_null($data2)) {
        //    Rest::create([
        //        'users_id' => $users_id,
        //        'attended_day' => $attended_day,
        //    ]);
        //    return view('/stamp', [
        //        'name' => $name,
        //       'message' => $msg_rest_true,
        //   ]);
        // } elseif (isset($data1) && isset($data2)) {
        //     return view('/stamp', [
        //               'name' => $name,
        //               'message' => $msg_rest_false,
        //           ]);
        //       } else {
        //          Rest::create([
        //        'users_id' => $users_id,
        //           'attended_day' => $attended_day,
        //      ]);
        //     return view('/stamp', [
        //          'name' => $name,
        //        'message' => $msg_rest_true,
        //      ]);
        //   }

        if (isset($data1)) {
            if (isset($data2) && is_null($data2)) {
                Rest::create([
                    'users_id' => $users_id,
                    'attended_day' => $attended_day,
                ]);
                return view('/stamp', [
                    'name' => $name,
                    'message' => $msg_rest_true,
                ]);
            } elseif ((isset($data2) && isset($data3))) {
                return view('/stamp', [
                    'name' => $name,
                    'message' => $msg_rest_false,
                ]);
            } else {
                Rest::create([
                    'users_id' => $users_id,
                    'attended_day' => $attended_day,
                ]);
                return view('/stamp', [
                    'name' => $name,
                    'message' => $msg_rest_true,
                ]);
            }
        } else {
            return view('/stamp', [
                'name' => $name,
                'message' => $msg_works_false,
            ]);
        }
    }
    public function resume()
    {
        $name = Auth::user()->name;
        $users_id = Auth::user()->id;
        $attended_day = new Carbon('today');
        $ended_at = Carbon::now();
        $msg_resume_true = '休憩を終了しました';
        $msg_resume_false = '休憩を開始してください';
        $data = Rest::where('users_id', '=', $users_id)
            ->where('attended_day', '=', $attended_day)
            ->whereNull('ended_at')
            ->first();
        //dd($data1);

        if (isset($data)) {
            $data->update([
                'ended_at' => $ended_at,
            ]);
            return view('/stamp', [
                'name' => $name,
                'message' => $msg_resume_true,
            ]);
        } else {
            return view('/stamp', [
                'name' => $name,
                'message' => $msg_resume_false,
            ]);
        }
    }
}
