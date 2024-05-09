<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                FashionablyLate
            </h1>
            @guest
            <form class="header__button" action="{{ route('login') }}" method="get">
                @csrf
                <button class="header__button-submit">
                    login
                </button>
            </form>
            @endguest
        </div>
    </header>

    <main>
        <div class="register__content">
            <h2 class="register__heading">
                Register
            </h2>
            <form class="signup-form" action="{{ route('register') }}" method="post">
                @csrf
                <div class="sign-form__group">
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
                    
                    <div class="signup-form__group">
                        <div class="signup-form__group-title">
                            <span class="signup-form__label--item">メールアドレス</span>
                        </div>
                        <div class="signup-form__group-content">
                            <div class="signup-form__input--text">
                                <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
                            </div>
                            <div class="signup-form__error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="signup-form__group">
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
                </div>
                <div class="signup-form__button">
                    <button class="signup-form__button-submit" type="submit">
                        登録
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>