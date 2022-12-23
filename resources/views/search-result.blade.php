<!DOCTYPE html>
<html lang="en">
<head>
        <title>Urdu Books</title>
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
    @push('search')
        {{$search}}
    @endpush
    @include('layouts.header-row1')
    @include('layouts.header-row2')
    <pre>
        @php
        print_r($books);
        @endphp
    </pre>
    <div class="book-display w-100 py-0 px-2 m-0 text-center">
        <div class="row w-100 justify-content-center align-items-center g-2 my-3">
            <div class="book col-6 col-md-4 col-lg-2 py-3 mx-auto">
                <a href="" class="book-link">
                    <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                    <h5 class="book-name">The Song Of Achilles</h5>
                </a>
                <p class="book-author m-0">Madelline Miller</p>
                <p cla mt-ss="book-price">RS 1695</p>
                <button class="btn btn-success add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</body>
</html>