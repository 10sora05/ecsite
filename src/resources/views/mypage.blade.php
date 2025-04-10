@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="flex">
    <div class="mypaje-top">
        <h2>マイページ</h2>
    </div>

    <form class="update-form">
        <div class="update-contents">
            <div class="update-form__item">
                <h3>名前</h3>
                <p class="update-form__account">{{ $user['name'] }}</p>
            </div>

            <div class="update-form__item">
                <h3>メールアドレス</h3>
                <p class="update-form__account">{{ $user['email'] }}</p>
            </div>

            <div class="update-form__item">
                <h3>パスワード</h3>
                <p class="update-form__iaccount">{{ $user['password'] }}</p>
            </div>

            <div class="update-form__button">
                <button class="update-form__button-submit" type="submit">編集</button>
            </div>

            <div class="account-item">
                <h3>出品商品一覧</h3>
            </div>
        </div>
    </form>
</div>

@endsection