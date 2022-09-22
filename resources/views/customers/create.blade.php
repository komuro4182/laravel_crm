
@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <h1>新規登録画面</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/customers" method="post">
        @csrf
        <div>
            <label for="create">名前</label>
            <input type="text" name="name" id="create">
        </div>
        <div>
        <label for="email">メールアドレス</label>
            <input type="text" name="email" id="email">
        </div><div>
        <label for="postcode">郵便番号</label>
            <input type="text" name="postcode" id="postcode" value="{{ $postcode }}">
        </div>
        <div>
        <label for="address">住所</label>
            <textarea name="address" id="address" cols="22" rows="3">{{ $address }}</textarea>
        </div>
        <div>
        <label for="phonenumber">電話番号</label>
            <input type="text" name="phonenumber" id="phonenumber">
        </div>
            <input type="submit" value="登録">
        
    </form>
    <button onclick="location.href='/customers/postcode'">郵便番号検索に戻る</button>
@endsection

