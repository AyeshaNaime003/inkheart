<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\City;
use App\Models\State;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check = $request->validate(
            [
                'street-house' => 'required',
                'state'  => 'required',
                'city'  => 'required',
                'phone-number'  => 'required|numeric:11',
                'email'  => 'required|email',
                'payment-method' => 'present'
            ]
        ); 

        try {
            // storing data to the database using object of Order Model
            // retrieving the corresponding state and city ids first
            $stateid = State::select('state_id')->where('name', 'LIKE', $request['state'])->get();
            $cityid = City::select('city_id')->where('name', 'LIKE', $request['city'])->get();
            if (!isset($stateid) || !isset($cityid)) {
                $order->city_id  = 1;
                $order->state_id  = 1;
            }
            $order = new Order;
            $order->user_id  = Auth::id();
            $order->payment_id  = 1;
            $order->city_id  = $cityid[0]['city_id'];
            $order->state_id  = $stateid[0]['state_id'];
            $order->phone_number  = $request['phone-number'];
            $order->country  = 'Pak';
            $order->total_amount  = session()->get('total');
            $order->address  = $request['street-house'];
            $order->save();

            $cart = session()->get('cart');
            foreach(session('cart') as $id => $details) {
                $orderItem = new OrderItem;
                $orderItem->ISBN = $id;
                $orderItem->order_id = $order->order_id;
                $orderItem->quantity = $details['quantity'];
                $orderItem->save();
            }

            session()->forget('cart');
        } catch(Exception $ex){
            return back()->withError($ex->getMessage())->withInput();
        }

        // $data = $request['state'];
        $url = '/order-receipt'.'/'.$order->order_id;
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        // retrieve the order corresponding to the id
        $order = Order::findOrFail($id);
        return view('/order-receipt', ['order_id' => $id])->with(compact('order'));
    }
}
