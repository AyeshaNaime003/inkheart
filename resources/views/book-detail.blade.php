<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Detail</title>
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
    <link rel="stylesheet" href={{url("css/homepage.css")}}>
    <link rel="stylesheet" href={{url("css/book-display.css")}}>
</head>
<body>

<!-- HEADER -->
@include('layouts/header-row1')
@include('layouts/header-row2')
<!-- HEADER -->

<!-- BOOK DETAIL -->!
<section class="book-detail">
    <div class="container-fluid">
        <div class="row p-0 p-md-4 m-0 my-md-4">
            <div class="col-12 col-md-5">
                <div class="book-img-container w-100">
                    <img src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt="" class="book-img-detail">
                </div>
            </div>
            <div class="col-12 col-md-7 px-0 px-md-4 mt-3">
                <h1 class="book-name-detail">{{$book[0]['title']}}</h1>
                <p class="book-price-detail">{{$book[0]['price']}}</p>
                <ul class="text-dark mb-4">
                    <li class="my-2">Author: {{$book[0]['auth_name']}}</li>
                    <li class="my-2">ISBN: {{$book[0]['ISBN']}}</li>
                    <li class="my-2">Publisher: {{$book[0]['pub_name']}}</li>
                    <li class="my-2">Language: {{$book[0]['language']}}</li>
                    <li class="my-2">Categories:
                        @php
                            foreach($book_categories as $category) {
                                echo $category['cat_name'].", ";
                            }
                        @endphp
                    </li>
                </ul>
                <div class="w-100 quantity-add-div d-flex align-items-center justify-content-start px-2">
                @if (Auth::user()) 
                    <p class="btn-holder">
                        <a href="{{ route('add.to.cart', $book[0]['ISBN']) }}" class="btn btn-peach-pink btn-block text-center" onclick="alert('Added to Cart!')" role="button">Add to cart</a> 
                    </p>
                @endif
                    
                </div>
                <!-- slide of buttons-->
                <div class="d-flex button-slider button-slider-detail button-slider-pink justify-content-around align-items-end g-2 mt-5 row w-100 text-center">
                    <a class="col mx-auto" ><button class="btn" onClick="setSliderButtons(0)">Description</button>
                    </a>
                    <a class="col mx-auto" ><button class="btn" onClick="setSliderButtons(1)">Additional Information</button> 
                    </a>
                    <a class="col mx-auto" ><button class="btn" onClick="setSliderButtons(2)">Description</button> 
                    </a>
            
                </div>
                <div id="book-description">
                    {{$book[0]['description']}}
                </div>
                <div id="book-additional-info">
                    <ul>Edition: {{$book[0]['edition']}}</ul>
                    <ul>Publication date: {{$book[0]['publication_date']}}</ul>
                </div>

                <div id="book-reviews">
                    <ol>
                        <li class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consectetur incidunt adipisci reprehenderit dolorem expedita voluptatum dolor! Quibusdam ipsa repudiandae labore ex alias. Deserunt explicabo blanditiis numquam labore molestias beatae!</li>
                        <li  class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consectetur incidunt adipisci reprehenderit dolorem expedita voluptatum dolor! Quibusdam ipsa repudiandae labore ex alias. Deserunt explicabo blanditiis numquam labore molestias beatae!</li>
                        <li  class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consectetur incidunt adipisci reprehenderit dolorem expedita voluptatum dolor! Quibusdam ipsa repudiandae labore ex alias. Deserunt explicabo blanditiis numquam labore molestias beatae!</li>
                    </ol>
                    <button class="btn btn-secondary d-block mx-auto">
                        View All comments
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BOOK DETAIL -->


<!-- FOOTER -->
@include('layouts/footer')
<!-- FOOTER -->


<!-- javascript -->
<script>
function setSliderButtons(divNumber){
    document.getElementById("book-description").style.display="none";
    document.getElementById("book-additional-info").style.display="none";
    document.getElementById("book-reviews").style.display="none";
    if(divNumber==0){
        document.getElementById("book-description").style.display="block";
    }else if(divNumber==1){
        document.getElementById("book-additional-info").style.display="block";
    }else{
        document.getElementById("book-reviews").style.display="block";
    }
}

</script>
<!-- javascript -->



<!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>
