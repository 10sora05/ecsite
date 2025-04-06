@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<!-- アップロードフォーム -->
<form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" accept="image/*">
    <button type="submit">アップロード</button>
</form>

<!-- アップロード後に画像が表示される -->
@if(session('image_path'))
<h2>アップロードされた画像:</h2>
<img src="{{ asset('storage/images/' . basename(session('image_path'))) }}" alt="Uploaded Image" style="max-width: 500px;">
@endif

<!-- エラーメッセージ -->
@if(session('error'))
<p style="color: red;">{{ session('error') }}</p>
@endif