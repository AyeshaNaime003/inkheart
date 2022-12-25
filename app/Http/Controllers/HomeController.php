<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(){
        // GET THE BESTSELLING BOOKS AND RECENT BOOKS
        $bestSellingBooks = bestSellingBooks();

        $recentBooks = recentBooks();

        return view('/homepage')->with(compact('bestSellingBooks', 'recentBooks'));
    }
    public function bestselling(){
        $bestSellingBooks = bestSellingBooks();
        return view('/bestselling-books')->with(compact('bestSellingBooks'));
    }

    public function recent(){
        $recentBooks = recentBooks();
        return view('/recent-books')->with(compact('recentBooks'));
    }
}
