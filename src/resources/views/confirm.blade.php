@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')


<div class="confirm__content">
    <h2 class="confirm__heading">
        confirm
    </h2>
    <form class="confirm-form__group" action="/thanks" method="post">
        @csrf
        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" />
        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" />
        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
        <input type="hidden" name="email" value="{{ $contact['email'] }}" />
        <input type="hidden" name="tel_1" value="{{ $contact['tel_1'] }}" />
        <input type="hidden" name="tel_2" value="{{ $contact['tel_2'] }}" />
        <input type="hidden" name="tel_3" value="{{ $contact['tel_3'] }}" />
        <input type="hidden" name="address" value="{{ $contact['address'] }}" />
        <input type="hidden" name="building" value="{{ $contact['building'] }}" />
        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />
        <input type="hidden" name="content" value="{{ $contact['content'] }}" />
        <div class="confirm-form__table">
            <table class="confirm-form__table-inner">
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">お名前</th>
                    <td class="confirm-table__text">
                        <span>{{ $contact['first_name'] }}</span>
                        <span>{{ $contact['last_name'] }}</span>
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">性別</th>
                    <td class="confirm-table__text">
                        @if($contact['gender'] == '1')
                        <span>男性</span>
                        @elseif($contact['gender'] == '2')
                        <span>女性</span>
                        @elseif($contact['gender'] == '3')
                        <span>その他</span>
                        @endif
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <span>{{ $contact['email'] }}</span>
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">電話番号</th>
                    <td class="confirm-table__text">
                        <span>{{ $contact['tel_1'] }}</span>
                        <span>{{ $contact['tel_2'] }}</span>
                        <span>{{ $contact['tel_3'] }}</span>
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">住所</th>
                    <td class="confirm-table__test">
                        <span>{{ $contact['address'] }}</span>
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">建物名</th>
                    <td class="confirm-table__text">
                        <span>{{ $contact['building'] }}</span>
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <span>{{ $contact['category_id'] }}</span>
                    </td>
                </tr>
                <tr class="confirm-form__table-row">
                    <th class="confirm-form__table-header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <span>{{ $contact['content'] }}</span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="confirm-form__button">
            <button class="confirm-form__button-submit">
                送信
            </button>
        </div>
    </form>
    <div class="confirm-form__link">
        <a href="/" name="back" value="back">
            修正
        </a>
    </div>
</div>



@endsection