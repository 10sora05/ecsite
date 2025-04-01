@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="flex">
    <div class="account-contents">
        <div class="mypaje-top">
            <h2>マイページ</h2>
        </div>
        <div class="account-name">
            <h3>名前</h3>
            <p>テスト太郎</p>
        </div>

        <div class="account-email">
            <h3>メールアドレス</h3>

        </div>

        <div class="account-password">
            <h3>パスワード</h3>

        </div>

        <div class="account-item">
            <h3>出品商品一覧</h3>

        </div>
    </div>
</div>
@endsection