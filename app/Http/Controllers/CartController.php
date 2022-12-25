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
        $no_of_items = count($cart, 0);
        $cart_books = array();

        if ($no_of_items > 0){
            for ($i = 0; $i < $no_of_items; $i++){
                $book = Book::select('book.*', 'bookstats.price')
                ->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->where('book.ISBN', '=', $cart[$i][0])->get();
                array_push($cart_books, $book);
            }
        } 

        return view('cart')->with(compact('cart_books'));
    }

    public function cart()
    {
        return view('cart');
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
    // public function store(Request $request)
    // {
    //     $temp_arr = session()->get('cart');
    //     $url = '/book-detail'.'/'.$request['bookid'];

    //     // check if item already exists in cart 
    //     for ($i = 0; $i < count($temp_arr, 0); $i++) {
    //         if (in_array($request['bookid'], $temp_arr[$i])) {

    //             return redirect($url);
    //         }
    //     }
        
    //     // check if quantity is greater than 0 for the item to be inserted in cart
    //     if ($request['book_quantity'] > 0) {
    //         array_push($temp_arr, [$request['bookid'], $request['book_quantity']]);
    //         session()->forget('cart');
    //         session()->put('cart', $temp_arr);
    //     }

    //     return redirect($url);
    // }
    public function store($id) {
        $test = Book::select('book.*', 'bookstats.price')
        ->join('bookstats', 'bookstats.ISBN', '=', 'book.ISBN')->where('book.ISBN', '=', $id)->get();
        $test = $test->toArray();
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $test[0]['title'],
                "quantity" => 1,
                "price" => $test[0]['price'],
                "img_link" => $test[0]['img_link']
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Perform editing of specified resource when appropriate button clicked.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // $cart = session()->get('cart');

        // $index = 0;
        // for ($i = 0; $i < count($cart, 0); $i++) {
        //     if (in_array($request['bookid'], $cart[$i])){
        //         break;
        //     }
        //     $index = $i;
        // }
        // // if the increase button is pressed, increment item quantity
        // if (isset($request['increase'])) {
        //     $cart[$index][1]++;
        // }
        // // if the decrease button is pressed, decrement item quantity
        // if (isset($request['decrease'])) {
        //     if ($cart[$index][1] > 1) {
        //         $cart[$index][1]--;
        //     }
        // }
        // session()->forget('cart');
        // session()->put('cart', $cart);

        // return redirect()->route('cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        // $cart = session()->get('cart');

        // $index = 0;
        // for ($i = 0; $i < count($cart, 0); $i++) {
        //     print_r($cart[$i]);
        //     if (in_array($request['bookid'], $cart[$i])){
        //         break;
        //     }
        // $index++;
        // }
        // unset($cart[$index]);
        // session()->forget('cart');
        // session()->put('cart', $cart);
        // return redirect()->route('cart');

        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
