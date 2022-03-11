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


    .stamp-text {
      font-weight: bold;
      padding-top: 30px;
    }

    .stamp-table {
      width: 80%;
      margin-left: auto;
      margin-right: auto;
    }

    .stamp-th {
      width: 50%;
    }

    .stamp-button {
      width: 90%;
      padding: 50px;
      margin-bottom: 30px;
      background-color: white;
      border: none;
      font-weight: bold;
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
    <form action="/date" method="">
      @csrf
      <button class=header-button>日付一覧</button>
    </form>
  </th>
  <th class=link-th>
    <form action="/logout" method="post">
      @csrf
      <button class=header-button>ログアウト</button>
    </form>
  </th>
</table>
@endsection
@section('card')
<p class=stamp-text>{{$message}}さん、お疲れ様です。</p>
<table class=stamp-table>
  <th class=stamp-th>
    <form action="/stamp/start" method="post">
      @csrf
      <input type="hidden" name="users_id" value={{$id}}>
      <input type="hidden" name="attended_day" value={{$attended_day}}>
      <button class=stamp-button>勤務開始</button>
    </form>
    <form action="" method="post">
      @csrf
      <button class=stamp-button>休憩開始</button>
    </form>
  </th>
  <th class=stamp-th>
    <form action="/stamp/end" method="post">
      @csrf
      <input type="hidden" name="users_id" value={{$id}}>
      <input type="hidden" name="attended_day" value={{$attended_day}}>
      <!--勤務開始ボタンを押すと下記を作成-->
      <input type="hidden" name="ended_at" value={{$ended_at}}>
      <button class=stamp-button>勤務終了</button>
    </form>
    <form action="" method="">
      @csrf
      <button class=stamp-button>休憩終了</button>
    </form>
  </th>
</table>
@endsection

</html>