<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BookDisplayController extends Controller
{   
    public function search(Request $request)
    {
        // GET THE WORDS TO PERFORM SEARCH
        $books = searchQuery($search = $request['search']??"", null);
        return view('search-result')->with(compact('books', 'search'));
    }
    public function filter(Request $request){
        $search=$request['search'];
        $books = searchQuery($request['search'], $request['filter']);
        return view('search-result')->with(compact('books', 'search'));
    }
}
