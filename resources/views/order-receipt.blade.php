<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href={{url("css/utilities.css")}}>
    <link rel="stylesheet" href={{url("css/cart.css")}}>
    <link rel="stylesheet" href={{url("css/shipping-payment.css")}}>
</head>
  <body>

  @include('layouts/header-row1')

  <section>
    <div class="container-fluid">
        <div id="order-receipt" class="mx-auto">
            <div class="d-flex">
                <div><span class="text-peach-pink"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg></span></div>
                <div class="ps-3 d-flex align-items-center"><p class="receipt-heading">Your order is confirmed!</p></div>
            </div>

            <div class="row">
                <hr class="mt-3">
                <p class="receipt-heading">Customer Information</p>
            </div>
            <div class="row">
                <ul class="my-0 py-0">Contact Information</ul>
                <ul>+{{$order['phone_number']}}</ul>
            </div>
            <div class="row">
                <ul class="my-0 py-0">Payment method</ul>
                <ul>COD(Cash On Delivery) - {{$order['total_amount']}}</ul>
            </div>
            <div class="row">
                <p class="my-0 py-0">Shipping Address</p>
                <p>{{$order['address']}}</p>
            </div>
            <div class="row">
                <ul class="my-0 py-0">Shipping Method</ul>
                <ul>HOME DELIVERY</ul>
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{route('homepage')}}" class="">
                <button class="btn-peach-pink mx-auto">
                    Back to Home
                </button>
                </a>
            </div>
        </div>
    </div>
  </section>
  </body>
</html>