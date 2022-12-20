<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
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
{{-- HEADER --}}
@include('layouts/header-row1')

<div class="d-none d-md-block bg-peach-pink text-center py-5" style="font-size: 3rem; font-weight: bold; letter-spacing: 2px;">
    Checkout
</div>

<section id="checkout">
    <div class="container-fluid my-3">
            <div class="row">
                <div class="col-12 col-md-8">
                    <form action="">
                        <div class="row">
                            <div class="col-12" id="shipping-address">
                                <h3>Shipping Address</h3>
                                <label class="d-block" for="">Full Name</label>
                                <input class="d-block w-90" type="text">

                                <label class="d-block" for="">Province:</label>
                                <input class="d-block w-90" type="text">

                                <label class="d-block" for="">City:</label>
                                <select class="d-block w-90" name="" id="">
                                    <option value="">Lorem.</option>
                                    <option value="">Lorem.</option>
                                    <option value="">Lorem.</option>
                                    <option value="">Lorem.</option>
                                    <option value="">Lorem.</option>
                                    <option value="">Lorem.</option>
                                </select>

                                <label class="d-block" for="">Street Address:</label>
                                <input class="d-block w-90" type="text" placeholder="Street Name and House Number">
                                <input class="d-block w-90" type="text" placeholder="Apartment, suite, unit etc. (optional)">

                                <label class="d-block" for="">Phone Number:</label>
                                <input class="d-block w-90" type="number">

                                <label class="d-block" for="">Username:</label>
                                <input class="d-block w-90" type="email">
                            </div>
                            <div class="col-12" id="payment-method">
                                <h3>Payment Method:</h3>
                                <input type="radio" value="COD">Cash on Delivery
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div id="cart-summary">
                            @include('layouts/minicart')
                        </div>
                        <div id="receipt">
                            <div class="container-fluid">
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
                        </div>
                    </div>
                </div>
            </div>
     </div>
</section>
</body>
</html>

