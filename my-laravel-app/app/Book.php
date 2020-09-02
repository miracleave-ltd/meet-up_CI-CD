<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function store($title,$body)
    {
        $this->title = $title;
        $this->body = $body;
        $this->save();
    }
}