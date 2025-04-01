@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')

    <div class="index__content">

        <div class="index__heading">
            <h2>商品一覧</h2>
        </div>

        <div class="flex">
            <div class="item__content">
                <div class="item">
                    <div class="item__img">
                        <img src="img/card.jpg" alt="商品" />
                    </div>
                    <div class="card__content">
                        <h3 class="item__product-name">
                            商品名
                        </h3>
                        <P class="item__rice">
                            ￥1000
                        </P>
                    </div>
                </div>
            </div>

            <div class="item__content">
                <div class="item">
                    <div class="item__img">
                        <img src="img/card.jpg" alt="商品" />
                    </div>
                    <div class="card__content">
                        <h3 class="item__product-name">
                            商品名
                        </h3>
                        <P class="item__rice">
                            ￥1000
                        </P>
                    </div>
                </div>
            </div>

            <div class="item__content">
                <div class="item">
                    <div class="item__img">
                        <img src="img/card.jpg" alt="商品" />
                    </div>
                    <div class="card__content">
                        <h3 class="item__product-name">
                            商品名
                        </h3>
                        <P class="item__rice">
                            ￥1000
                        </P>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection