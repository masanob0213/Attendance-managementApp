<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    .card {
      margin-top: 0px;
      text-align: center;
      padding-bottom: 30px;
    }


    .link-table {
      margin-left: auto;
    }

    .header-button {
      padding: 10px;
      background-color: white;
      border: none;
      font-weight: bold;
      margin: 0px 10px;
    }

    .today {
      text-decoration: none;
    }


    .day-text {
      font-weight: bold;
      padding-top: 30px;
    }

    .date-table {
      table-layout: fixed;
      width: 90%;
      margin: auto;
    }

    .contents-tr {
      border-style: solid;
      border-color: black;
      font-weight: bold;
    }


    th {
      padding: 10px;
    }
  </style>
</head>

@extends('layouts.layouts')

@section('header')
<table class=link-table>
  <th class=link-th>
    <form action="/stamp" method="">
      @csrf
      <button class=header-button>ホーム</button>
    </form>
  </th>
  <th class=link-th>
    <form action="" method="">
      @csrf
      <button class=header-button>日付一覧</button>
    </form>
  </th>
  <th class=link-th>
    <form action="/login" method="">
      @csrf
      <button class=header-button>ログアウト</button>
    </form>
  </th>
</table>
@endsection
@section('card')
<p class=day-text>{{$attended_day->toDateString();}}</p>
<table class=date-table>
  <tr class=contents-tr>
    <th class=contents-th>名前</th>
    <th class=contents-th>勤務開始</th>
    <th class=contents-th>勤務終了</th>
    <th class=contents-th>休憩時間</th>
    <th class=contents-th>勤務時間</th>
  </tr>

  @php
  $value1 = '大森政信';
  $value2 = '08:00:00';
  $value3 = '18:00:00';
  $value4 = '01:00:00';
  $value5 = '08:00:00';
  @endphp

  @foreach ($attendances as $attendance)
  <tr>
    <!--attendances→users_id
      →Auth->users_idとidを一致->名前取得-->
    <td>{{$attendance->name}}</td>
    <td>{{$attendance->started_at->format('H:i:s')}}</td>
    <td>{{$attendance->ended_at->format('H:i:s')}}</td>
    <td>{{$attendance->rest_started_at}}</td>
    <td>{{$value5}}</td>
  </tr>
  @endforeach
</table>

@endsection


</html>