<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// トップ画面
Route::get('/', function () {
    return view('home');
})->name('home');

// 本登録画面
Route::get('/books/register', 'BooksController@register')->name('register_book');

// 本登録処理
Route::post('/books/store', 'BooksController@store')->name('store_book');

// 本一覧画面(登録した本)
Route::get('/books/show','BooksController@show')->name('show_books');
