<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if(!is_null(session()->has('admin'))){
            // get books
            $books = bestSellingBooks();

            // echo "admin has session";
            return view('adminHome')->with(compact('books'));   
        }
        return redirect('');
    }

    public function remove($ISBN){
        // remove from datababase
        $removeBook = Book::find($ISBN);
        $removeBook->delete();

        // get books
        $books = bestSellingBooks();
        return view('adminHome')->with(compact('books'));
    }

    public function addBook(Request $r){
        var_dump($r);
    }

    public function search(Request $request){
            // GET THE WORDS TO PERFORM SEARCH
            $books = searchQuery($search = $request['search']??"", null);
            return view('adminhome')->with(compact('books'));
        }
}
