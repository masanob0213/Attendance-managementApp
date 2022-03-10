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

    .register-text {
      font-weight: bold;
      padding-top: 30px;
    }

    .text-form {
      width: 50%;
      /*background-color: greenyellow;*/
      margin: auto
    }


    input {
      display: block;
      width: 95%;
      margin: auto;
      margin-top: 10px;
      padding: 10px 0px 10px 5px;
      border-radius: 3px;
      background-color: #EEEEEE;
      color: #C0C0C0;
      border: 1px, #EEEEEE;
    }

    .register-button {
      width: 98%;
      margin-top: 20px;
      background-color: blue;
      color: white;
      padding: 5px;
      border-radius: 5px;
      text-decoration: none;
      border: none;
    }

    .login-text {
      color: #C0C0C0;
      margin-bottom: 0px;
    }

    .login-button {
      text-decoration: none;
      background: transparent;
      border: none;
      color: blue;
    }
  </style>
</head>

@extends('layouts.layouts')

@section('card')
<div class="card">
  <p>text</p>
  <p class=register-text>ログイン</p>
  <div class="text-form">
    <form action="/auth/login" method="post">
      @csrf
      <input type="text" name="e_mail" value="メールアドレス">
      <input type="text" name="password" value="パスワード">
      <button class=register-button>ログイン</button>
    </form>
  </div>
  <div class=login>
    <p class=login-text>アカウントをお持ち出ない方はこちら</p>
    <form action="/auth/register" method="get">
      <button class=login-button>会員登録</button>
    </form>
  </div>
</div>
@endsection

</html>