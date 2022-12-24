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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Pacifico&display=swap"
        rel="stylesheet">


    <!-- css link -->
    <link rel="stylesheet" href={{ url('css/utilities.css') }}>
    <link rel="stylesheet" href={{ url('css/homepage.css') }}>
    <link rel="stylesheet" href={{ url('css/book-display.css') }}>
</head>

<body>
    <!-- HEADER -->
    @include('layouts/header-row1')
    @include('layouts/header-row2')
    <!-- HEADER -->



    <!-- BOOK DETAIL -->
    <section class="book-detail">
        <div class="container-fluid">
            <div class="row p-0 p-md-4 m-0 my-md-4">
                <div class="col-12 col-md-5 ">
                    <div class="book-img-container w-100 h-50">
                        <input type="image" name="" id=""
                            src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6"
                            alt="" class="book-img-detail">
                    </div>.

                </div>
                <div class="col-12 col-md-7 px-0 px-md-4 ">
                    <input type="text" class="book-details mt-4" value="ISBN"><br>
                    <input type="text" class="book-details" value="Title"><br>
                    <input type="text" class="book-details" value="Author"><br>
                    <input type="text" class="book-details" value="Publisher"><br>
                    <input type="text" class="book-details" value="Publication Date"><br>
                    <input type="text" class="book-details" value="Language"><br>
                    <input type="text" class="book-details" value="Edition"><br>
                    <textarea class="book-details" name="" id="" cols="30" rows="10">Old discription here</textarea>

                </div>
                <div class="col-12 col-md-7 px-0 px-md-4 w-100 ">
                    <div class="d-flex justify-content-center">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle bg-peach-pink" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Type of Book
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <h4>Educative</h4>
                                <h4>Leisure</h4>
                                <h4>Urdu</h4>
                                <h4>Islamic</h4>
                            </div>
                        </div>
                        <input type="text" name="" id="" value="Price" class="book-price">
                    </div>


                    <div class="card w-100 ">
                        <div class="bg-light-pink">
                            <h4>Category</h4>
                        </div>

                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Autobiographies
                            </label>
                        </div>
                        <div class="form-check mt-4 ml-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                biographies
                            </label>
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Memoirs & Letters
                            </label>
                        </div>
                        <div class="form-check mt-4">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Politics & Government
                            </label>
                        </div>
                    </div>
                </div>
                <div class="container text-center mt-4 ">
                    <button type="button" class="btn bg-peach-pink button">ADD Record</button>
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
        function setSliderButtons(divNumber) {
            document.getElementById("book-description").style.display = "none";
            document.getElementById("book-additional-info").style.display = "none";
            document.getElementById("book-reviews").style.display = "none";
            if (divNumber == 0) {
                document.getElementById("book-description").style.display = "block";
            } else if (divNumber == 1) {
                document.getElementById("book-additional-info").style.display = "block";
            } else {
                document.getElementById("book-reviews").style.display = "block";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
