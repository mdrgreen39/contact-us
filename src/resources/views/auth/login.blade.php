@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
<div class="login__content">
    <h2 class="login-form__heading">
        login
    </h2>
    <form class="login-form" action="/login" method="post">
        @csrf
        <div class="login-form__group">
            <div class="login-form__group-title">
                <span class="login-form__labe--item">メールアドレス</span>
            </div>
            <div class="login-form__group-content">
                <div class="login__input--text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="login-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="login-form__group">
            <div class="login-form__group-title">
                <span class="login-form__label--item">パスワード</span>
            </div>
            <div class="login-form__content">
                <div class="login-form__input--text">
                    <input type="password" name="password" placeholder="coachtech1106" />
                </div>
                <div class="login-form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="login-form__button">
            <button class="login-form__button-submit" type="submit">
                ログイン
            </button>
        </div>
    </form>
</div>