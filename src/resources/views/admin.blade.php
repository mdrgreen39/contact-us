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
    <form class="search-form" action="/admin" method="get">
        @csrf
        <div class="search-form__group">
            <div class="admin-form__search">
                <input type="text" name="text" placeholder="お名前やメールアドレスを入力してください" />
                <select class="search-form__gender--select">
                    <option value="male">性別</option>
                    <option value="male">男性</option>
                    <option value="male">女性</option>
                    <option value="male">その他</option>
                </select>
                <select class="search-form__category--select" name="category_id">
                    <option value="category_id">お問い合わせの種類</option>
                </select>
                <input class="search-form__date" type="date" name="data" value="" />
                <div class="search-form__button">
                    <button class="">検索</button></div>
            </div>
        </div>
    </form>
</div>
@endsection