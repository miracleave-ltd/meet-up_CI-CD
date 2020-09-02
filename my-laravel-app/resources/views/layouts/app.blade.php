<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MY FAVARITE BOOKS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/asset/css/style.css">
    </head>
    <body>
        <header>
            <div class="header-wrapper">
                <div class="title"><a href="{{ route('home') }}">MY FAVARITE BOOK</a></div>
                <div class="menu">
                    <ul>
                        <li><a href="{{ route('register_book') }}">登録</a></li>
                        <li><a href="{{ route('show_books')}}">一覧</a></li>
                    </ul>                
                </div>
            </div>
        </header>
        <body>
            @yield('content')
        </body>
    </body>
</html>