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
    public function searchFilter(Request $request){
        $search=$request['search'];
        $books = searchQuery($request['search'], $request['filter']);
        return view('search-result')->with(compact('books', 'search'));
    }

    public function type($type){
        if($type=='educative'){
            $typeNum = 2;
        }else if($type=='urdu'){
            $typeNum = 3;
        }else if($type=='leisure'){
            $typeNum = 4;
        }else if($type=='islamic'){
            $typeNum = 5;
        }
        $books = typeQuery($typeNum, null, null);
        $view_page = $type."-books";
        return view($view_page)->with(compact('books'));
    }

    public function typeFilter($type, Request $req){
        if($type=='educative'){
            $typeNum = 2;
        }else if($type=='urdu'){
            $typeNum = 3;
        }else if($type=='leisure'){
            $typeNum = 4;
        }else if($type=='islamic'){
            $typeNum = 5;
        }
        $books = typeQuery($typeNum, $req['filter'], null);
        $view_page = $type."-books";
        return view($view_page)->with(compact('books'));
    }

    public function typeCategory($type, $category){
        if($type=='educative'){
            $typeNum = 2;
        }else if($type=='urdu'){
            $typeNum = 3;
        }else if($type=='leisure'){
            $typeNum = 4;
        }else if($type=='islamic'){
            $typeNum = 5;
        }
        $books = typeQuery($typeNum, null, $category);
        $view_page = $type."-books";
        // echo "getting books of type=$type and category=$category";
        return view($view_page)->with(compact('books'));
    }

}
