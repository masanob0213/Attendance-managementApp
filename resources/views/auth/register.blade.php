<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    .form_register {
        padding-top: 20px;
    }

    .title_register {
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

    .register_button {
        width: 53%;
        background-color: blue;
        border-radius: 5px;
        font-weight: bold;
        padding: 10px;
        color: white;
        border: 2px solid blue;
        background-color: blue;
    }

    .login-button {
        text-decoration: none;
        color: blue;
    }
</style>

@extends('layouts.layouts')
@section('card')
<div class=form_register>
    <form method="POST" action="/register">
        @csrf
        <h1 class=title_register>会員登録</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Name -->
        <table>
            <tr>
                <td>
                    <!-- Name --><input id="name" type="text" name="name" required autofocus />
                </td>
            </tr>
            <tr>
                <td><input id="email" type="email" name="email" required /></td>
            </tr>
            <tr>
                <td><input id="password" type="password" name="password" required autocomplete="new-password" /></td>
            </tr>
            <tr>
                <td><input id="password_confirmation" type="password" name="password_confirmation" required /></td>
            </tr>
            <tr>
                <td>
                    <button class=register_button>会員登録</button>
                </td>
            </tr>
        </table>
    </form>
    <div class=login>
        <p class=login-text>アカウントをお持ちの方はこちらから</p><a href="/login" class=login-button>ログイン</a>
    </div>
</div>

@endsection

</html>