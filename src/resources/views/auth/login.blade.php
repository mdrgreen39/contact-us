<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                FashionablyLate
            </h1>
            @guest
            <form class="header__button" action="/register" method="get">
                @csrf
                <button class="header__button-submit">
                    register
                </button>
            </form>
            @endguest
        </div>
    </header>

    <main>
        <div class="login__content">
            <h2 class="login__heading">
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

    </main>








</body>