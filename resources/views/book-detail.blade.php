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
    <link rel="stylesheet" href="./utilities.css">
    <link rel="stylesheet" href="./homepage4.css">
    <link rel="stylesheet" href="./book-display.css">
</head>
<body>
    <!-- The booksdeatils will come form the data -->
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
                    <a href="./cart.html" class="header-icons mx-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- row 2: menu bar for categories -->
    <div class="container-fluid row2 p-0 m-0">
        <!-- drop down for small screen -->
        <div class="dropdown d-sm-none w-100 bg-peach-pink">
            <button class="btn dropdown-toggle w-100 border-0" type="button" id="triggerId" data-bs-toggle="dropdown">Dropdown</button>
            <div class="dropdown-menu w-100 bg-peach-pink">
                <a class="dropdown-item" href="./educative-books.html">Educative</a>
                <a class="dropdown-item" href="./urdu-books.html">Urdu</a>
                <a class="dropdown-item" href="./islamic-books.html">Islamic</a>
                <a class="dropdown-item" href="./leisure-books.html">Leisure</a>
                <a class="dropdown-item" href="./bestsellers-books.html">Best Sellers</a>
                <a class="dropdown-item" href="./recent-books.html">Recent in stock</a>
            </div>
        </div>
        <!-- menu bar for large screens -->
        <nav class="navbar navbar-expand-sm d-none d-sm-block bg-peach-pink">
            <div class="container-fluid p-0 d-flex justify-content-center">
                <ul class="navbar-nav">
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="./educative-books.html"><h6>Educative</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="./urdu-books.html"><h6>Urdu</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="./islamic-books.html"><h6>Islamic</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="./lesiure-books.html"><h6>Leisure</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="./bestsellers-books.html"><h6>Best Sellers</h6></a>
                  </li>
                  <li class="nav-item d-block mx-md-3 px-1">
                    <a class="nav-link active" href="./recent-books.html"><h6>Recent in stock</h6></a>
                  </li>
                </ul>
            </div>
          </nav>
    </div>
</header>
<!-- HEADER -->



<!-- BOOK DETAIL -->
<section class="book-detail">
    <div class="container-fluid">
        <div class="row p-0 p-md-4 m-0 my-md-4">
            <div class="col-12 col-md-5">
                <div class="book-img-container w-100">
                    <img src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6" alt="" class="book-img-detail">
                </div>
            </div>
            <div class="col-12 col-md-7 px-0 px-md-4">
                <h1 class="book-name-detail">The Song Of Achilles</h1>
                <p class="book-price-detail">RS 1695</p>
                <ul class="text-dark">
                    <li>Author: Lorem ipsum</li>
                    <li>ISBN: 3863201876973913</li>
                    <li>Publisher: Lorem, ipsum dolor.</li>
                    <li>Format: Lorem, ipsum dolor.</li>
                    <li>Language: lorem</li>
                    <li>Categories:Autobiographies, Biographies, Memoirs & Letters, Politics & Government</li>
                </ul>
                <div class="w-100 quantity-add-div d-flex align-items-center justify-content-start px-2">
                    <form action=""><input type="number" class="quantity" placeholder="1"></form>
                    <button class="btn-peach-pink">Add to Cart</button>
                </div>
                <!-- slide of buttons-->
                <div class="d-flex button-slider button-slider-detail button-slider-pink justify-content-around align-items-end g-2 mt-5 row w-100">
                    <button class="col-3 col-md" onClick="setSliderButtons(0)">Description
                    </button>
                    <button class="col-3 col-md" onClick="setSliderButtons(1)">Additional Information
                    </button>
                    <button class="col-3 col-md" onClick="setSliderButtons(2)">Reviews(0)
                    </button>
                </div>
                <div id="book-description">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora nemo assumenda alias expedita quis vel magnam necessitatibus quisquam! Nisi, sapiente molestiae. Itaque voluptates voluptas quaerat!
                </div>
                <div id="book-additional-info">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, quas.
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
<footer>
    <div class="container-fluid p-2 bg-peach-pink text-light">
      <div class="row w-100">
          <div class="col-6 col-md-3">
              <a href="./homepage4.html" class="text-decoration-none text-light text-md-left my-2 d-block text-center"><img class="img-fluid logo-img-footer" src="./logos/book (1).png" alt=""><p class="m-auto text-logo">InkHeart</p></a>
          </div>
          <div class="col-6 col-md-3 text-center col1 p-2">
              <h5 class="m-3">Customer Service</h5>
              <ul>
              <li><a href="#" class="text-decoration-none">Shipping and Returns</a></li>
              <li><a href="#" class="text-decoration-none">Exchnage and Refund Policy</a></li>
              <li><a href="#" class="text-decoration-none">Privacy Policy</a></li>
              <li><a href="#" class="text-decoration-none">User Guide</a></li>
              <li><a href="#" class="text-decoration-none">FAQs</a></li>
              </ul>
          </div>
          <div class="col-6 col-md-3 text-center col2 p-2">
              <h5 class="m-3">Products</h5>
              <ul>
              <li><a href="./educative-books.html" class="text-decoration-none">Educative</a></li>
              <li><a href="./urdu-books.html" class="text-decoration-none">Urdu</a></li>
              <li><a href="./islamic-books.html" class="text-decoration-none">Islamic</a></li>
              <li><a href="./lesiure-books.html" class="text-decoration-none">Leisure</a></li>
              <li><a href="./bestsellers-books.html" class="text-decoration-none">Best Sellers</a></li>
              <li><a href="./recent-books.html" class="text-decoration-none">Recent in Stock</a></li>
              </ul>
          </div>
          <div class="col-6 col-md-3 text-center col3 p-2">
              <h5 class="m-3">About Us</h5>
              <ul>
              <li><a href="#" class="text-decoration-none">About the business</a></li>
              <li><a href="#" class="text-decoration-none">Contact us</a></li>
              </ul>
          </div>
      </div>
    </div>
    <div class="copyright bg-peach-pink m-0 p-0">
      <p class="text-copyright px-3">Copyright © 2022 InkHeart. The InkHeart is not responsible for the content of external sites. Read about our approach to external linking.</p>
    </div>
</footer>
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