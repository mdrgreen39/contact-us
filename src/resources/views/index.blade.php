@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')


<div class="contact__content">
    <h2 class="contact__heading">
        Contact
    </h2>
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">お名前<span class="contact-form__label--required">※</span></p>
            </div>
            <div class="contact-form__input--text">
                <input type="text" name="first_name" placeholder="例: 山田" value="{{ old('first_name') }}" />
                <input type="text" name="last_name" placeholder="例: 太郎" value="{{ old('last_name') }}" />
            </div>
            <div class="contact-form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">性別<span class="contact-form__label--required">※</span></p>
            </div>
            <div class="contact-form__input-radio">
                <input type="radio" name="gender" value="1" checked>男性
                <input type="radio" name="gender" value="2">女性
                <input type="radio" name="gender" value="3">その他
            </div>
            <div class="contact-form__error">
                @error('gender')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">メールアドレス<span class="contact-form__label--required">※</span></p>
            </div>
            <div class="contact-form__input--text">
                <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
            </div>
            <div class="contact-form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">電話番号<span class="contact-form__label--necessary">※</span></p>
            </div>
            <div class="contact-form__input--text">
                <input type="tel" name="tel_1" placeholder="080" value="{{ old('tel_1') }}" />
                <div class="contact-form__input--symbol">-</div>
                <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel_2') }}" />
                <div class="contact-form__input--symbol">-</div>
                <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel_3') }}" />
            </div>
            <div>
                @error('tel1', 'tel_2', 'tel_3')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">住所<span class="contact-form__label--required">※</span></p>
            </div>
            <div class="contact-form__input--text">
                <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="contact-form__error">
                @error('address')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">建物名</p>
            </div>
            <div class="contact-form__input--text">
                <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">お問い合わせの種類<span class="contact-form__label--required">※</span></p>
            </div>
            <div class="contact-form__input--text">
                <select class="contact-form__input--select" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="contact-form__error">
                @error('category_id')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__group">
            <div class="contact-form__group-title">
                <p class="contact-form__label--item">お問い合わせ内容<span class="contact-form__label--required">※</span></p>
            </div>
            <div class="contact-form__input--textarea">
                <textarea name="content" placeholder="お問い合わせ内容をご記載ください" value="{{ old('textarea') }}"></textarea>
            </div>
            <div class="contact-form__error">
                @error('content')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="contact-form__button">
            <button class="contact-form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection