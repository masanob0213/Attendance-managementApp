<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .form_login {
            text-align: center;
            padding-top: 20px;
        }

        .title_login {
            font-size: 20px;
        }

        table {
            width: 100%;
        }

        tr {
            text-align: center;
        }

        input {
            width: 50%;
            background-color: #EEEEEE;
            color: #747474;
            padding: 10px;
            font-size: 12px;
            margin: 5px;
            border-radius: 5px;
            border: 2px solid gray;
        }

        .login_button {
            width: 53%;
            background-color: blue;
            border-radius: 5px;
            font-weight: bold;
            padding: 10px;
            color: white;
            border: 2px solid blue;
            background-color: blue;
        }

        .register-button {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

@extends('layouts.layouts')
@section('card')

<div class=form_login>
    <form method="post" action="/login">
        @csrf
        <h1 class=title_login>
            ログイン
        </h1>
        <table>
            <tr>
                <td>
                    <input id="email" type="email" name="email" required autofocus />
                </td>
            </tr>
            <tr>
                <td>
                    <input class=contents-input id="password" type="password" name="password" required autocomplete="current-password" />
                </td>
            </tr>
            <tr>
                <td>
                    <button class=login_button>ログイン</button>
                </td>
            </tr>
        </table>
        <!-- Remember Me -->
        <!--
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
    -->
    </form>
    <div class=register>
        <p class=register-text>アカウントをお持ち出ない方はこちら</p>
        <a href="/register" class=register-button>会員登録</a>
    </div>
</div>


@endsection

</html>