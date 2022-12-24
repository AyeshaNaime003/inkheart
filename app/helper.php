<?php
use App\Models\Book;



if(!function_exists('searchQuery')){
    function searchQuery($search, $filter){
        if($filter=='bestselling'){
            $filterName = "sold";
            $orderBy = "desc";
        }elseif($filter=='lth'){
            $filterName = "price";
            $orderBy = "asc";
        }elseif($filter=='htl'){
            $filterName = "price";
            $orderBy = "desc";
        }elseif($filter=='lth'){
            $filterName = "price";
            $orderBy = "asc";
        }elseif($filter=='lth'){
            $filterName = "price";
            $orderBy = "asc";
        }elseif($filter=='lth'){
            $filterName = "price";
            $orderBy = "asc";
        }else{
            $filterName = "title";
            $orderBy = "asc";
        }
        if($search!=""){
            // QUERY
            if(is_numeric($search)){
                // SEACH  BY ISBN
                $books = Book::select('book.*', 'author.name', 'bookstats.price', 'bookstats.quantity', 'bookstats.sold')->join('author', 'author.auth_id', '=', 'book.auth_id')->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->where('ISBN', '=', $search)->orderBy($filterName, $orderBy)->get();
            }else{
                // SEARCH BY NAME, AUTHOR, CATEGORY
                // NEED TO JOIN BOOK, AUTHOR AND BOOK_STATS TABLE TO GET FULL INFO
                $books_title = Book::select('book.*', 'author.name', 'bookstats.price', 'bookstats.quantity', 'bookstats.sold')->join('author', 'author.auth_id', '=', 'book.auth_id')->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->
                where('title', 'LIKE', '%'.$search.'%');

                $books_author = Book::select('book.*', 'author.name', 'bookstats.price', 'bookstats.quantity', 'bookstats.sold')->join('author', 'author.auth_id', '=', 'book.auth_id')->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->
                where('author.name', 'LIKE', '%'.$search.'%');
                
                $books_category = Book::select('book.*', 'author.name', 'bookstats.price', 'bookstats.quantity', 'bookstats.sold')->join('author', 'author.auth_id', '=', 'book.auth_id')->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->join('category', 'category.ISBN', '=', 'book.ISBN')->
                where('category.cat_name', 'LIKE', '%'.$search.'%');
                
                $books = $books_title->union($books_author)->union($books_category)->orderBy($filterName, $orderBy)->get();
                return $books;
            }
        }
    }
}

?>