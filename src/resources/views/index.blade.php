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
        @foreach ($items as $item)
        <div class="item__content">
            <div class="item">
                <div class="item__img">
                    <p class="update-form__item-input">{{ $item['image'] }}</p>
                </div>
                <div class="card__content">
                    <form class="update-form">
                        <div class="update-form__item">
                            <p class="update-form__item-input">{{ $item['name'] }}</p>
                        </div>
                        <div class="update-form__item">
                            <p class="update-form__item-input">{{ $item['price'] }}</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection