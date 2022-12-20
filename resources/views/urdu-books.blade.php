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

<!-- HEADER -->
@include('layouts/header-row1')
@include('layouts/header-row2')
<!-- HEADER -->

<!-- DISPLAY -->
<section id="main" class="container-fluid p-0 my-3">
    <div class="d-flex align-items-center justify-content-between px-5">
        <h1 class="display-6 mx-2 my-3">Urdu Books</h1>
        <form action="">
            <select name="" id="">
                <option value="1">Bestselling</option>
                <option value="1">Lowest to highest price</option>
                <option value="1">Highest to lowest price</option>
                <option value="1">Oldest to Newest Books</option>
                <option value="1">Newest to Oldest Books</option>
            </select>
        </form>
    </div>
    <!-- slide of button for  more than medium -->
    <div class="d-flex button-slider button-slider-pink justify-content-around align-items-end g-2 mt-2 row w-100">
        <button class="col-3 col-md">Novels</button>
        <button class="col-3 col-md">Poetry</button>
        <button class="col-3 col-md">Literature</button>
    </div>
    <!-- book display -->
    @include('layouts/book-display')
    <!-- pages -->
    <div class="pages d-flex justify-content-center align-items-center">
        <button class="btn btn-outline btn-outline-peach-pink mx-2">First</button>
        <button class="bg-peach-pink mx-2 btn">&lt&lt</button>
        <button class="bg-dark text-light btn mx-2">Current Page</button>
        <button class="bg-peach-pink mx-2 btn">&gt&gt</button>
        <button class="btn btn-outline btn-outline-peach-pink mx-2">Last</button>
    </div>
</section>
<!-- DISPLAY -->

<!-- FOOTER -->
@include('layouts/footer')
<!-- FOOTER -->
    
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</body>
</html>