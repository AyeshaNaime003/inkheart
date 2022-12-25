<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($isbn)
    {   
        $book = Book::select('book.*', 'author.name as auth_name', 'publisher.name as pub_name', 'bookstats.price')
        ->join('author', 'author.auth_id', '=', 'book.auth_id')->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')
        ->join('publisher', 'publisher.publisher_id', '=', 'book.publisher_id')->where('book.ISBN', '=', $isbn)->get();

        $book_categories = Book::select('book.ISBN', 'category.cat_name')->join('category', 'category.ISBN', '=', 'book.ISBN')
        ->where('book.ISBN', '=', $isbn)->get();

        return view('/book-detail', ['isbn' => $isbn])->with(compact('book', 'book_categories'));
    }
 
}
