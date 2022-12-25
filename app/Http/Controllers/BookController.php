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
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
