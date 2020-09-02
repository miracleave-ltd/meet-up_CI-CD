<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function register()
    {
      return view('books.register');
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $bookModel = new Book();
        $bookModel->store($title,$body);
        
        return redirect(route('show_books'));
    }

    public function show()
    {
        $bookModel = new Book();
        $books = $bookModel->all();
        return view('books.show',['books' => $books]);
    }
}
