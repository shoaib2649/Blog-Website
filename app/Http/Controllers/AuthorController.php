<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add_author()
    {
        $author = new Author();
        $author->name='asad';
        $author->email='asad@gmail.com';
        $author->save();


    }
}
