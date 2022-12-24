<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = session()->get('cart');
        $no_of_books = count($cart, 0);
        $cart_books = array();

        for ($i = 0; $i < $no_of_books; $i++){
            $book = Book::select('book.*', 'bookstats.price')
            ->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->where('book.ISBN', '=', $cart[$i][0])->get();
            array_push($cart_books, $book);
        }

        return view('cart')->with(compact('cart_books'));
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
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
        $temp_arr = session()->get('cart');
        $url = '/book-detail'.'/'.$request['bookid'];

        // check if item already exists in cart 
        for ($i = 0; $i < count($temp_arr, 0); $i++) {
            if (in_array($request['bookid'], $temp_arr[$i])) {

                return redirect($url);
            }
        }
        
        // check if quantity is greater than 0 for the item to be inserted in cart
        if ($request['book_quantity'] < 1) {
        }
        else {
            array_push($temp_arr, [$request['bookid'], $request['book_quantity']]);
            session()->put('cart', $temp_arr);
        }

        return redirect($url);
    }

    /**
     * Perform editing of specified resource when appropriate button clicked.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $cart = session()->get('cart');

        foreach ($cart as $item) {
            $index = array_search($request['bookid'], $item);
        }
        // if the increase button is pressed, increment item quantity
        if (isset($request['increase'])) {
            $cart[$index][1]++;
        }
        // if the decrease button is pressed, decrement item quantity
        if (isset($request['decrease'])) {
            if ($cart[$index][1] > 1) {
                $cart[$index][1]--;
            }
        }
        session()->put('cart', $cart);

        return redirect()->route('cart');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        $cart = session()->get('cart');

        foreach ($cart as $item) {
            $index = array_search($request['bookid'], $item);
        }
        unset($cart[$index]);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
}
