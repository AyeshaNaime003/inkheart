<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        return view('homepage', ['name' => $name]);
    }


/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // get the words from the from and perform query
        $search = $request['search']??"";
        if($search!=""){
            // query
            if(is_numeric($search)){
                // search bu ISBN
                $books = Book::where('ISBN', '=', $search)->get();
            }else{
                // Search by name, author, category
                $books_title = Book::where('title', 'LIKE', '%'.$search.'%');
                $books_author = Book::select('book.*')->join('author', 'author.auth_id', '=', 'book.auth_id')->
                where('name', 'LIKE', '%'.$search.'%');
                $books_category = Book::select('book.*')->join('category', 'category.ISBN', '=', 'book.ISBN')->
                where('cat_name', 'LIKE', '%'.$search.'%');
                $books = $books_title->union($books_author)->union($books_category)->get();
            }
        }else{
            $books = "no result";
        }
        return view('search-result')->with(compact('books', 'search'));
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
