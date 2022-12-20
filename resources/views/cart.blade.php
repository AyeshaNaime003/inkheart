<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- css link -->
        <link rel="stylesheet" href={{url("css/utilities.css")}}>
        <link rel="stylesheet" href={{url("css/cart.css")}}>
      </head>
<body>
<!-- HEADER -->
@include('layouts/header-row1')
<!-- HEADER -->

<div class="d-none d-md-block bg-peach-pink text-center py-5" style="font-size: 3rem; font-weight: bold; letter-spacing: 2px;">
    Cart
</div>

<section id="cart">
    <div class="container-fluid py-3 px-2">
        <div class="cart-item border row align-items-center">
            <div class="col-2 col-md item-img-container">
                <img src="https://m.media-amazon.com/images/I/51vRNqL61aL._AC_SY780_.jpg" alt="" class="cart-img">
            </div>
            <div class="col col-md">
                <span class="item-name">Lorem ipsum dolor sit amet.</span>
            </div>
            <div class="col-1 col-md remove">
                <a href="" class="remove-link"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg><span class="d-none d-sm-inline">Remove</span></a>
            </div>
            <div class="col-2 col-md">300 PKR</div>
            <div class="col-2">
                <form action="" class="col-4 item-quantity-form">
                    <input type="number" class="item-quantity m-auto">
                </form>
            </div>
            <div class="col-12 col-md">
                <Strong>Subtotal:</Strong>
                <span class="item-total-price">600 PKR</span>
            </div>
        </div>
        <div class="cart-item border row align-items-center">
            <div class="col-2 col-md item-img-container">
                <img src="https://m.media-amazon.com/images/I/51vRNqL61aL._AC_SY780_.jpg" alt="" class="cart-img">
            </div>
            <div class="col col-md">
                <span class="item-name">Lorem ipsum dolor sit amet.</span>
            </div>
            <div class="col-1 col-md remove">
                <a href="" class="remove-link"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg><span class="d-none d-sm-inline">Remove</span></a>
            </div>
            <div class="col-2 col-md">300 PKR</div>
            <div class="col-2">
                <form action="" class="col-4 item-quantity-form">
                    <input type="number" class="item-quantity m-auto">
                </form>
            </div>
            <div class="col-12 col-md">
                <Strong>Subtotal:</Strong>
                <span class="item-total-price">600 PKR</span>
            </div>
        </div>
        <div class="cart-item border row align-items-center">
            <div class="col-2 col-md item-img-container">
                <img src="https://m.media-amazon.com/images/I/51vRNqL61aL._AC_SY780_.jpg" alt="" class="cart-img">
            </div>
            <div class="col col-md">
                <span class="item-name">Lorem ipsum dolor sit amet.</span>
            </div>
            <div class="col-1 col-md remove">
                <a href="" class="remove-link"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg><span class="d-none d-sm-inline">Remove</span></a>
            </div>
            <div class="col-2 col-md">300 PKR</div>
            <div class="col-2">
                <form action="" class="col-4 item-quantity-form">
                    <input type="number" class="item-quantity m-auto">
                </form>
            </div>
            <div class="col-12 col-md">
                <Strong>Subtotal:</Strong>
                <span class="item-total-price">600 PKR</span>
            </div>
        </div>
        <div class="cart-item border row align-items-center">
            <div class="col-2 col-md item-img-container">
                <img src="https://m.media-amazon.com/images/I/51vRNqL61aL._AC_SY780_.jpg" alt="" class="cart-img">
            </div>
            <div class="col col-md">
               <span class="item-name">Lorem ipsum dolor sit amet.</span></strong>
            </div>
            <div class="col-1 col-md remove">
                <a href="" class="remove-link"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg><span class="d-none d-sm-inline">Remove</span></a>
            </div>
            <div class="col-2 col-md">300 PKR</div>
            <div class="col-2">
                <form action="" class="col-4 item-quantity-form">
                    <input type="number" class="item-quantity m-auto">
                </form>
            </div>
            <div class="col-12 col-md">
                <Strong>Subtotal:</Strong>
                <span class="item-total-price">600 PKR</span>
            </div>
        </div>
    </div>
</section>

<section id="receipt">
    <div class="container-fluid px-3 my-4 border">
        <table class="w-100">
            <tr>
                <th class="py-2">Subtotal:</th>
                <td class="text-end">Lorem.</td>
            </tr>
            <tr>
                <th class="py-2">Shipping:</th>
                <td class="text-end">lorem.</td>
            </tr>
            <tr>
                <th class="py-2">Total:</th>
                <td class="text-end">Lorem.</td>
            </tr>
        </table>
    </div>

</section>

<div class="btn-container d-flex align-items-center justify-content-between px-4">
    <a href={{url()->previous()}}> <button class="btn btn-block btn-peach-pink p-2 m-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
      </svg> Back to Shopping</button></a>
    <a href={{route("checkout")}}><button class="btn btn-block btn-dark m-2">Proceed to Check Out <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
      </svg></button></a>
</div>
</body>

</html>