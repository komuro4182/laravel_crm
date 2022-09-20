@extends('layouts.main')

@section('title', '郵便番号検索画面')

@section('content')
    <h1>郵便番号検索画面</h1>

    <form action="{{ '/customers/postcode' }}" method="GET">
        @csrf
        <div>
            <label for="postcode">郵便番号検索</label>
            <input type="text" name="name" id="postcode" placeholder="検索したい郵便番号">
            <input type="submit" value="検索">
        </div>
    </form>
    <button onclick="location.href={{ '/customers/postcode' }}">一覧へ戻る</button>
@endsection
