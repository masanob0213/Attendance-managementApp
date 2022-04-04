<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Rest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $attended_day = new Carbon('today');
        //休憩時間の合計
        //$rest_total =Rest::where('user_id'==);

        //attendancesの勤務時間-上記の休憩時間の合計

        //UserモデルとAttendanceを結合
        $attendance = User::Join('attendances', 'users.id', '=', 'attendances.user_id')
            //->Join('rests', 'users.id', '=', 'rests.user_id')
            //->join('attendances', 'users.id', '=', 'attendances.user_id')
            ->where('attended_day', '=', $attended_day)
            ->get();

        //勤務時間と休憩時間を$attendanceに追加




        //dd($attendance);
        //$attendance = User::Join('rests', 'users.id', '=', 'rests.user_id')
        //->get();
        //dd($attendance);
        //->where('attended_day', '=', $attended_day)
        //->get();
        //attendancesテーブルをより、今日のカラムを全権取得
        //dd($attended_day);
        //$items = Attendance::where('attended_day', '=', $attended_day)->get();
        //->simplePaginate(5);

        //要修正
        //$users_id= $items->'users_id';
        //上記のusers_idより、名前を取得
        //$name = Auth::user()->name;
        //->where('id', '=', $users_id)
        //->first(['name']);
        //dd($name);
        //$items = Attendance::simplePaginate(5);




        //$items = [];
        //$users = User::all();

        //foreach ($users as $user) {
        //$items[] = [
        // membersテーブル - nameカラム
        //'name'  => $users->name,
        // phonesテーブル - numberカラム
        //'started_at' => $users->attendances()->select('id', 'started_at', 'ended_at')
        //  ->get()->toArray()
        //];

        return view('data', [
            'attendances' => $attendance,
            'attended_day' => $attended_day,
        ]);
    }
}
