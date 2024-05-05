@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('form')
<form class="header__button" action="{{ route('logout') }}" method="post">
    @csrf
    <button class="header__button-submit" type="submit">
        logout
    </button>
</form>
@endsection

@section('content')

<div class="admin__content">
    <h2 class="admin__heading">
        Admin
    </h2>
    <form class="admin-form" action="" method="">
        @csrf
        <div class="admin-form__group">
            <div class="admin-form__input--text">
                <input type="text" name="input" placeholder="名前やメールアドレスを入力してください" value=" {{ old('input') }}" />
                <select class="admin-form__select">
                    <option value="male"></option>
                    <option value="male">男性</option>
                    <option value="male">女性</option>
                </select>
            </div>
        </div>
    </form>
</div>
@endsection