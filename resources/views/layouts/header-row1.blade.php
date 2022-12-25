<head>
    <!-- icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href={{url("css/utilities.css")}}>
  
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->

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
                <form class="col-12 col-sm-7 col-md-4 px-2 my-1" role="search" action="{{route('search')}}" method="post">
                    @csrf
                    <input type="search" name="search" class="form-control d-block ml-md-0" placeholder="Search..." value=@stack('search')>
                    <button type='submit'></button>
                </form>
                <!-- user related: login/signup, wisdsffthlist, cart -->
                <div class="col-12 col-md-5 my-2 m-md-0 text-center d-md-flex justify-content-end ">

                    @if (Auth::user())
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <a href=""><button type="submit" class="btn bg-peach-pink me-2">Logout</button></a>
                        </form>
                        <!-- profile icon -->
                        <a href="#"><button type="button" class="btn btn-outline-peach-pink border-0 me-2"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg></button></a>
                            
                        <a href="{{route('cart')}}" class="header-icons mx-1" onmouseover="document.getElementById('cart-hover').style.display='block'"
                    onmouseleave="document.getElementById('cart-hover').style.display='none'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    </a>
                    
                    <div id="cart-hover" class="bg-light text-dark p-2 col-4" onmouseover="document.getElementById('cart-hover').style.display='block'"
                    onmouseleave="document.getElementById('cart-hover').style.display='none'">
                        @include('layouts/minicart')
                    </div>
                    @else
                        <a href="{{url('login')}}"><button type="button" class="btn bg-peach-pink me-2">Login</button></a>
                        <a href="{{url('signup')}}"><button type="button" class="btn btn-outline-peach-pink me-2">Sign-up</button></a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER -->
