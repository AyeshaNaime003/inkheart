<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
    <!-- icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Pacifico&display=swap" rel="stylesheet">


  <!-- css link -->
  <link rel="stylesheet" href="{{url('css/utilities.css')}}">
  <link rel="stylesheet" href="{{url('css/homepage.css')}}">
</head>
<body>
    

@include('layouts/header-row1')
@include('layouts/header-row2')

<!-- CAROUSEL -->
<div id="carousel1" class="carousel slide mb-5" data-bs-ride="carousel" data-interval="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class=""></button>
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" class=""></button>
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#carousel1" data-bs-slide-to="3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
        <!-- carousel item 1 -->
        <div class="carousel-item active">
            <div class="">
                <img class="d-block" src="https://erhsraider.org/wp-content/uploads/2015/09/SAT-and-PSAT-photo.gif" alt="educative books">
            </div>
            <div class="container">
                <a href="{{route('educative')}}">
                    <div class="carousel-caption text-start">
                        <h1  class="text-center">EDUCATIVE BOOKS</h1>
                    </div>
                </a>
            </div>
        </div>
        <!-- carousel item 2 -->
        <div class="carousel-item">
            <div class="">
                <img class="d-block" src="https://live.staticflickr.com/492/31522791694_1ed3f3833d_b.jpg" alt="urdu books">
            </div>
            <div class="container">
                <a href="{{route('urdu')}}">
                    <div class="carousel-caption text-start">
                        <h1 class="text-center">URDU BOOKS</h1>
                    </div>
                </a>
            </div>
        </div>
        <!-- carousel item 3 -->
        <div class="carousel-item">
            <div class="">
                <img class="d-block" src="https://m2w4k5m5.stackpathcdn.com/wp-content/uploads/shutterstock_36770200.jpg" alt="islamic books">
            </div>
            <div class="container">
                <a href="{{route('islamic')}}">
                    <div class="carousel-caption text-start">
                        <h1 class="text-center">ISLAMIC BOOKS</h1>
                    </div>
                </a>
            </div>
        </div>
        <!-- carousel item 4 -->
        <div class="carousel-item">
            <div class="">
                <img class="d-block" src="https://www.realsimple.com/thmb/Sm40Cb1_Uqe_BaRxmLyCbyWKmz0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/romance-novels-2000-199452b65bf542c8bd3ca97990f12bb0.jpg" alt="leisure books">
            </div>
            <div class="container">
                <a href="{{route('leisure')}}">
                    <div class="carousel-caption text-start">
                        <h1 class="text-center">LEISURE BOOKS</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- CAROUSEL -->



<!-- BESTSELLING -->
<div id="bestselling" class="container-fluid m-0 p-0">
    <div class="d-flex align-items-center justify-content-between px-5">
        <h1 class="display-6 mx-2 my-3">Our Best Sellers</h1>
        <button class="my-btn-bold bg-peach-pink text-light"><a href="./bestsellers-books.html">View All</a></button>
    </div>
    <div class="row m-0 p-0 bg-dark text-light text-center">
        <!-- book1 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="#" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p cla mt-ss="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
        <!-- book2 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p class="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
        <!-- book3 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p class="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
        <!-- book4 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p class="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>
<!-- BESTSELLING -->



<!-- CARDS -->
<div id="myCards" class="container-fluid p-0 m-0">
    <div class="row w-100 py-5 px-3 p-0 text-dark text-center">
        <div class="col-6 col-lg-3 px-2. pb-3">
            <div class="bg-peach-pink text-light circle mx-auto d-flex align-items-center justify-content-center mb-2"> 
                <span class="material-symbols-outlined d-block">category</span>
            </div>
            <h5 class="fw-normal text-peach-pink">Wide Variety of Books</h5>
        </div>
        <div class="col-6 col-lg-3 px-2.5 pb-3">
            <div class="bg-peach-pink text-light circle mx-auto d-flex align-items-center justify-content-center mb-2"> 
                <span class="material-symbols-outlined d-block">local_shipping</span>
            </div>
            <h5 class="fw-normal text-peach-pink">Speedy shipping, orders above 2000PKR have free delivery</h5>
        </div>
        <div class="col-6 col-lg-3 px-2.5 pb-3">
            <div class="bg-peach-pink text-light circle mx-auto d-flex align-items-center justify-content-center mb-2">  
                <span class="material-symbols-outlined d-block">chat</span>
            </div>
            <h5 class="fw-normal text-peach-pink">24/7 Customer service</h5>
        </div>
        <div class="col-6 col-lg-3 px-2.5 pb-3">
            <div class="bg-peach-pink text-light circle mx-auto d-flex align-items-center justify-content-center mb-2"> 
                <span class="material-symbols-outlined d-block">history</span>
            </div>
            <h5 class="fw-normal text-peach-pink">Return Warranty</h5>
        </div>
    </div>
</div>
<!-- CARDS ENDING-->



<!-- RECENTLY ADDED TO THE STOCK -->
<div id="recently-added" class="container-fluid m-0 p-0">
    <div class="d-flex align-items-center justify-content-between px-5">
        <h1 class="display-6 mx-2 my-3">Recently Added</h1>
        <button class="my-btn-bold bg-peach-pink text-light"><a href="./recent-books.html">View All</a></button>
    </div>
    <div class="row m-0 p-0 bg-dark text-light text-center">
        <!-- book1 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p cla mt-ss="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
        <!-- book2 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p class="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
        <!-- book3 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p class="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
        <!-- book4 -->
        <div class="col-6 col-md-3 my-4 mx-auto">
            <a href="" class="book-link">
                <div class="book-image-container"><img class="book-img" src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt=""></div>
                <h5 class="book-name">The Song Of Achilles</h5>
            </a>
            <p class="book-author">Madelline Miller</p>
            <p class="book-price">RS 1695</p>
            <button class="btn btn-success add-to-cart">Add to Cart</button>
        </div>
    </div>
</div>
<!-- RECENTLY ADDED TO THE STOCK: ENDED -->


@include('layouts/footer')


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>
</html>