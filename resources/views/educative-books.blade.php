<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Educative Books</title>
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
        <link rel="stylesheet" href={{url("css/utilities.css")}}>
        <link rel="stylesheet" href={{url("css/homepage.css")}}>
        <link rel="stylesheet" href={{url("css/book-display.css")}}>
      </head>
<body>

{{-- HEADER --}}
@include('layouts/header-row1')
@include('layouts/header-row2')
{{-- HEADER --}}


{{-- HEADING AND FILTER --}}
<div class="d-flex align-items-center justify-content-between px-5">
    @if($books->isEmpty())
    <h1 class="display-6 mx-2 my-3">No Results found</h1>
@else
    <h1 class="display-6 mx-2 my-3">Educative Books:</h1>
@endif
    <form action="{{url('')}}/{{"educative"}}" method='post'>
        @csrf
        <select name="filter" id="">
            <option value="bestselling">Bestselling</option>
            <option value="lth">Lowest to highest price</option>
            <option value="htl">Highest to lowest price</option>
        </select>
        <button class="btn-peach-pink">Apply filter</button>
    </form>
</div>
<!-- slide of filters-->
<div class="row button-slider align-items-center text-center button-slider-pink g-2 mt-2 w-100">
    <a href="{{url('')}}/{{'educative'}}/{{'History'}}" class="col-4 col-md-3 col-lg mx-auto">History</a>
    <a href="{{url('')}}/{{'educative'}}/{{'Medical'}}" class="col-4 col-md-3 col-lg mx-auto">Medical</a>
    <a href="{{url('')}}/{{'educative'}}/{{'Computing'}}" class="col-4 col-md-3 col-lg mx-auto">Computing</a>
    <a href="{{url('')}}/{{'educative'}}/{{'Business and Accounting'}}" class="col-4 col-md-3 col-lg mx-auto">Business and Accounting</a>
    <a href="{{url('')}}/{{'educative'}}/{{'Chemistry'}}" class="col-4 col-md-3 col-lg mx-auto">Chemistry</a>
    <a href="{{url('')}}/{{'educative'}}/{{'Physics'}}" class="col-4 col-md-3 col-lg mx-auto">Physics</a>
    <a href="{{url('')}}/{{'educative'}}/{{'Exam Preparation'}}" class="col-4 col-md-3 col-lg mx-auto">Exam Preparation</a>
</div>


{{-- MAIN DISPLAY --}}
@php 
    $counter = 0; 
    $books=$books->toArray();
    $running = True;
    // CALCULATE NUMBER OF ROWS NEEDED
    $rows = (count($books)/6) + 1;
@endphp
<div class="book-display w-100 py-0 px-2 m-0 text-center">        
    {{-- RUN LOOP TO RUN THE FIVE ROWS --}}
    @for($i=1; $i<=$rows; $i++)
        <div class="row w-100 justify-content-center align-items-center g-2 my-3">
        @foreach(array_slice($books, $counter, 6) as $book)
            <div class="book col-6 col-md-4 col-lg-3 col-xl-2 py-3 mx-auto">
                <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src={{$book['img_link']}} alt=""></div>
                <h5 class="book-name">{{$book['title']}}</h5>
                </a>
                <p class="book-author">{{$book['name']}}</p>
                <p cla mt-ss="book-price">RS {{$book['price']}}</p>
                <button class="btn btn-success add-to-cart">Add to Cart</button>
            </div>
        @endforeach
        @php $counter += 6; @endphp
        </div>
    @endfor
</div>



{{-- FOOTER --}}
@include('layouts/footer')
{{-- FOOTER --}}

<!-- Bootstrap JavaScript Libraries -->


</body>
</html>