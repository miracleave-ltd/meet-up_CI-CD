@extends('layouts.app')

@section('content')
<div class="container">
    <h2>お気に入り一覧</h2>
    <div class="book-list">
        @foreach($books as $book)
            <div class="book-block">
                <div class="header">
                    <h4>{{ $book->title }}</h4>
                </div>
                <div class="body">
                    <p>{{ $book->body }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection