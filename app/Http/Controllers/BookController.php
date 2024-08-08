<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;


use Illuminate\Http\Request;

class BookController extends Controller
{
    public function add_book()
    {
        $author = Author::find(1);

        $book = new Book();
        $book->name = 'Self Learning';
        $book->versions = '7';
        $author->books()->save($book);
    }
    public function get_book($id)
    {
        $book = Book::find($id);
        // $books= Book::where('author_id',$id)->get();
        $books = $book->author;
        return $books;
    }
    public function get_author($id)
    {
        $author = Author::find($id);
        $author = $author->books;

        foreach ($author as $author) {
            echo "<span> $author->id </span> <span> $author->name </span> <br><br>";

        }
    }
}
