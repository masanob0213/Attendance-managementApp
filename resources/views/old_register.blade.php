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
<p class=register-text>会員登録</p>
<div class="text-form">
  <form action="/auth/register" method="POST">
    @csrf
    <input type="text" name="name" value="名前">
    <input type="text" name="email" value="メールアドレス">
    <input type="text" name="password" value="パスワード">
    <input type="text" name="confirmation_password" value="確認用パスワード">
    <button class=register-button>会員登録</button>
  </form>
</div>
<div class=login>
  <p class=login-text>アカウントをお持ちの方はこちら</p>
  <form action="/login" method="get">
    <button class=login-button>ログイン</button>
  </form>
</div>



@endsection

</html>