<head>
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet">


</head>
<!-- HEADER -->
<header>
    <!-- row 1: logo, search bar, user related stuff -->
    <div class="px-3 py-2 text-bg-dark row1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- logo -->
                <div class="col-12 col-sm-5 col-md-3 p-0">
                    <a href="{{route('homepage')}}" class="text-decoration-none text-light text-md-left my-2 d-block text-center">
                        <img class="img-fluid logo-img-header" src="{{url('logos/book.png')}}" alt=""><span class="m-2 text-logo">InkHeart</span>
                    </a>
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
                    
                    @if (Auth::user())
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a href=""><button type="submit" class="btn bg-peach-pink me-2">Logout</button></a>
                        </form>
                        <a href="{{url('signup')}}"><button type="button" class="btn btn-outline-peach-pink me-2">Profile</button></a>
                    @else
                        <a href="{{url('login')}}"><button type="button" class="btn bg-peach-pink me-2">Login</button></a>
                        <a href="{{url('signup')}}"><button type="button" class="btn btn-outline-peach-pink me-2">Sign-up</button></a>
                    @endif
                    <a href="./wishlist.html" class="header-icons mx-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clipboard-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5 1.5A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm5 0a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Z"/>
                        <path d="M3 1.5h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Z"/>
                        <path d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.31 8 6.982Z"/>
                        </svg>
                    </a>
                    <a href="{{route('cart')}}" class="header-icons mx-1" onmouseover="document.getElementById('cart-hover').style.display='block'"
                    onmouseleave="document.getElementById('cart-hover').style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    </a>
                    <div id="cart-hover" class="bg-light text-dark p-2 col-4" onmouseover="document.getElementById('cart-hover').style.display='block'"
                    onmouseleave="document.getElementById('cart-hover').style.display='none'">
                        @include('layouts/minicart')
                        <div class="cart-subtotal d-flex justify-content-between py-2">
                            <strong>Subtotal:</strong>
                            <strong><span class="subtotal">10800.00 PKR</span></strong>
                        </div>
                        <div class="button-holder d-flex justify-content-between">
                            <a href={{route("cart")}}><button class="btn-peach-pink">View cart</button></a>
                            <button class="btn btn-dark">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER -->
