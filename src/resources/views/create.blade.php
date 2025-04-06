@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')

<div class="item-create__content">
    <div class="item-create__heading">
        <h2>商品出品</h2>
    </div>
    <div class="flex">
        <form class="form" action="/item/upload" method="post">
            @csrf
            <div class="form__item-create">
                <div class="form__item-title">
                    <span class="form__item">商品名</span>
                </div>
                <div class="form__create-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="テスト商品" class="form__input--text1" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class="form__item-description">
                <div class="form__description-title">
                    <span class="form__description">商品説明</span>
                </div>
                <div class="form__description-content">
                    <div class="form__input--text">
                        <textarea name="content" placeholder="商品の内容説明" class="form__input--text1"></textarea>
                    </div>
                </div>
            </div>

            <div class=" form__price">
                <div class="form__price-title">
                    <span class="form__label--item">販売価格</span>
                </div>
                <div class="form__price-content">
                    <div class="form__input--text">
                        <input type="price" name="price" placeholder="1000" class="form__input--text1" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>

            <div class=" form__img">
                <div class="form__img-title">
                    <span class="form__img--item">商品画像</span>
                </div>
                <div class="form__img-content">
                    <div class="form__input--img">
                        <input type="file" name="image" accept="image/*" class="form__input--text1">
                    </div>
                    <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>


            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection