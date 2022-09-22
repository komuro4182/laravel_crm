@extends('layouts.main')

@section('title', '編集画面')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <h1>編集画面</h1>
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

    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name', $customer->name) }}">
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="text" name="email" id="email" value="{{ old('email', $customer->email) }}">
        </div>
        <div>
            <label for="postcode">郵便番号</label>
            <input type="text" name="postcode" id="postcode" value="{{ old('postcode', $customer->postcode) }}">
        </div>
        <div>
            <label for="address">住所</label>
            <input type="text" name="address" id="address" value="{{ old('address', $customer->address) }}">
        </div>
        <div>
            <label for="phonenumber">電話番号</label>
            <input type="text" name="phonenumber" id="phonenumber" value="{{ old('phonenumber', $customer->phonenumber) }}">
        </div>
        <input type="submit" value="更新">
    </form>
    <button onclick="location.href='/customers'">戻る</button>
@endsection
