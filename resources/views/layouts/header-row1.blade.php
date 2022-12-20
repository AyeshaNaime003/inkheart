<!-- HEADER -->
<header>
    <!-- row 1: logo, search bar, user related stuff -->
    <div class="px-3 py-2 text-bg-dark row1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- logo -->
                <div class="col-12 col-sm-5 col-md-3 p-0">
                    <a href={{route('homepage')}} class="text-decoration-none text-light text-md-left my-2 d-block text-center"><img class="img-fluid logo-img-header" src={{url("logos/book.png")}} alt=""><span class="m-2 text-logo">InkHeart</span></a>
                </div>  
                <!-- search bar -->
                <form class="col-12 col-sm-7 col-md-4 px-2 my-1" role="search">
                    <input type="search" name="search" class="form-control d-block ml-md-0" placeholder="Search...">
                    {{-- @if($previousSearch)
                        {{$search}}
                    @else
                        {{"Search..."}}
                    @endif> --}}
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