@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')

<div class="register__content">
    <h2 class="register-form__heading">
        Register
    </h2>
    <form class="signup-form" action="/register" method="post">
        @csrf
        <div class="signup-form__group">
            <div class="signup-form__group-title">
                <span class="signup-form__label--item">お名前</span>
            </div>
            <div class="signup-form__group-content">
                <div class="signup-form__input--text">
                    <input type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}" />
                </div>
                <div class="signup-form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="signup-form__group">
            <div class="signup-form__group-title">
                <span class="signup-form__label--item">メールアドレス</span>
            </div>
            <div class="signup-form__group-content">
                <div class="signup-form__input-text">
                    <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="signup-form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="signup-form__group-content">
            <div class="signup-form__group-title">
                <span class="signup-form__label--item">パスワード</span>
            </div>
            <div class="signup-form__content">
                <div class="signup-form__input--text">
                    <input type="password" name="password" placeholder="coachtech1106" />
                </div>
            </div>
            <div class="signup-form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="signup-form__group">
            <div class="signup-form-title">
                <span class="signup-form__label--item">確認用パスワード</span>
            </div>
            <div class="signup-form__group-content">
                <div class="signup-form__input--text">
                    <input type="password" name="password_confirmation" placeholder="coachtech1106"/>
                </div>
            </div>
        </div>
        <div class="signup-form__button">
            <button class="signup-form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>