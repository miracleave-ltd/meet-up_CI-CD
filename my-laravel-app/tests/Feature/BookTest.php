<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Book;
use App\Http\Controllers\BookController;


class BookTest extends TestCase
{
    /**
     * @test
     */
    public function home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function register()
    {
        $response = $this->get('/books/register');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function show()
    {
        $response = $this->get('/books/show');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function store()
    {
        $this->post('/books/store',['title' => '初めて読んだ本','body' => '最高に面白かったやっぱりよかった']);
        $this->assertDatabaseMissing('books',[
            'title' => '初めて読んだ本',
            'body' => '最高に面白かったやっぱりよかった'
        ]);
        Book::where('title','初めて読んだ本')->delete();
    }

}
