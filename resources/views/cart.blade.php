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
        <!-- icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet">
      
      
        <!-- css link -->
        <link rel="stylesheet" href="./utilities.css">
        <link rel="stylesheet" href="./cart.css">
      </head>
<body>
<!-- HEADER -->
<header>
    <!-- row 1: logo, search bar, user related stuff -->
    <div class="px-3 py-2 text-bg-dark row1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- logo -->
                <div class="col-12 col-sm-5 col-md-3 p-0">
                    <a href="./homepage4.html" class="text-decoration-none text-light text-md-left my-2 d-block text-center"><img class="img-fluid logo-img-header" src="./logos/book.png" alt=""><span class="m-2 text-logo">InkHeart</span></a>
                </div>  
                <!-- search bar -->
                <form class="col-12 col-sm-7 col-md-4 px-2 my-1" role="search">
                    <input type="search" class="form-control d-block ml-md-0" placeholder="Search..." >
                </form>
                <!-- user related: login/signup, wishlist, cart -->
                <div class="col-12 col-md-5 my-2 m-md-0 text-center d-md-flex justify-content-end">
                    <button type="button" class="btn bg-peach-pink me-2">Login</button>
                    <button type="button" class="btn btn-outline-peach-pink me-2">Sign-up</button>
                    <a href="./wishlist.html" class="header-icons mx-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clipboard-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Z"/>
                        <path d="M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z"/>
                        </svg>
                    </a>
                    <a href="./cart.html" class="header-icons mx-1" onmouseover="document.getElementById('cart-hover').style.display='block'" 
                    onmouseleave="document.getElementById('cart-hover').style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                        <div id="cart-hover" class="bg-light text-dark p-2" onmouseover="document.getElementById('cart-hover').style.display='block'" 
                        onmouseleave="document.getElementById('cart-hover').style.display='none'">
                            <div class="cart-item d-flex align-items-center">
                                <div class="item-img-container h-100">
                                    <img class="item-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt="">
                                </div>
                                <div class="item-details">
                                    <p>
                                        <span class="item-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, omnis?</span>
                                        <span class='quantity'>3</span> x 
                                        <span class="item-unit-price">1200</span> = 
                                        <span class="item-total-price">3600</span>
                                    </p>
                                </div>
                            </div>
                            <div class="cart-item d-flex align-items-center">
                                <div class="item-img-container h-100">
                                    <img class="item-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt="">
                                </div>
                                <div class="item-details">
                                    <p>
                                        <span class="item-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, omnis?</span>
                                        <span class='quantity'>3</span> x 
                                        <span class="item-unit-price">1200</span> = 
                                        <span class="item-total-price">3600</span>
                                    </p>
                                </div>
                            </div>
                            <div class="cart-subtotal d-flex justify-content-between py-2">
                                <strong>Subtotal:</strong> 
                                <strong><span class="subtotal">10800.00 PKR</span></strong>
                            </div>
                            <div class="button-holder d-flex justify-content-between">
                                <button class="btn btn-outline-peach-pink">View cart</button>
                                <button class="btn btn-dark">Checkout</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
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
        <div class="btn-container d-flex align-items-center justify-content-between px-4">
            <a href=""> <button class="btn btn-block btn-dark p-2 m-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg> Back to Shopping</button></a>
            <a href=""><button class="btn-block btn-peach-pink m-2">Proceed to Check Out <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
              </svg></button></a>
        </div>
    </div>
</section>
</body>
</html>