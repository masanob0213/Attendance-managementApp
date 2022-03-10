@extends('layouts.layouts')
@section('card')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->

            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('')" required autofocus />
                <input type="text" name="name" value="名前">
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <input type="text" name="email" value="メールアドレス">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <input type="text" name="password" value="パスワード">
            </div>

            <!-- Confirm Password -->
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            <input type="text" name="confirmation_password" value="確認用パスワード">
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

@endsection