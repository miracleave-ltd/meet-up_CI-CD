@extends('layouts.app')

@section('content')
<div class="container">
    <div class="home-content">
        <ul>
            <li><a href="{{ route('register_book') }}">本を登録</a></li>
            <li><a href="{{ route('show_books') }}">登録一覧</a></li>
        </ul>
    </div>
</div>
@endsection