<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- css link -->
    <link rel="stylesheet" href={{ url('css/utilities.css') }}>
    <link rel="stylesheet" href={{ url('css/cart.css') }}>
</head>

<body>
    @php 
        $admin = session()->get('admin');   
    @endphp

    <!-- HEADER -->
    @include('layouts/admin-header')
    <!-- HEADER -->

    

    <div class="d-none d-md-block bg-peach-pink text-center py-3"
        style="font-size: 2.5rem; font-weight: bold; letter-spacing: 2px;">
        Home
    </div>
    <div class="btn-container d-flex align-items-center justify-content-between px-4">
        <h2>{{$admin['first_name']}} {{$admin['last_name']}}</h2>
        <a href="{{url('/admin')}}/{{'addBook'}}"><button class="btn btn-block bg-light-pink m-2">Add New Book</button></a>
    </div>
    <section id="cart">
        <div class="container-fluid py-5 px-0">
            <div class="cart-item row align-items-center mx-auto my-1 w-100">
                <div class="d-none d-md-block col-2 col-md item-img-container">
                    <Strong>Book Picture</Strong>
                </div>
                <div class="col-3 col-md">
                    <Strong>ISBN:</Strong>
                </div>
                <div class="col-3 col-md">
                    <Strong>Title:</Strong>
                </div>
                <div class="d-none d-md-block col-3 col-md">
                    <Strong>Author name:</Strong>
                </div>
                <div class="col-3 col-md">
                    <Strong>Price:</Strong>
                </div>
                <div class="col-1 col-md"></div>
                <div class="col-1 col-md"></div>
            <div>
            {{-- BOOKS FROM DATABASE --}}
            @php 
                $books = $books->toArray();
            @endphp
            @foreach($books as $book)
                <div class="cart-item row align-items-center mx-auto my-3 w-100">
                    <div class="col-2 col-md item-img-container d-none d-md-block">
                        <img src={{$book['img_link']}} alt=""
                            class="cart-img">
                    </div>
                    <div class="col-3 col-md">
                        <span class="item-isbn">
                            {{$book['ISBN']}}
                        </span>
                    </div>
                    <div class="col-3 col-md">
                        <span class="item-name">
                            {{$book['title']}}
                        </span>
                    </div>
                    <div class="d-none d-md-block col-3 col-md">
                        {{$book['name']}}
                    </div>
                    <div class="col-3 col-md">
                        <span class="item-total-price">{{$book['price']}}</span>
                    </div>
                    <div class="col-1 col-md remove">
                        <a href="{{url('/admin')}}/{{'remove'}}/{{$book['ISBN']}}" onclick="return confirm('Are you sure you want to delete this item?');" class="remove-link"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg><span class="d-none d-md-inline">Remove</span></a>
                    </div>
                    <div class="col-1 col-md edit">
                        <a href={{url('/editbook')}} class="remove-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                            <path
                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                            </svg><span class="d-none d-md-inline">Edit</span></a>
                    </div>
                </div>
            @endforeach
    </section>






</body>

</html>
