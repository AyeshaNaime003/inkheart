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
    <link rel="stylesheet" href={{ url('css/admin.css') }}>

    <style>
        select{
        height: 2rem;
        }
        input{
            padding: 2px
        }
    </style>
</head>

<body>
<!-- HEADER -->
@include('layouts/admin-header')
<!-- HEADER -->


{{-- FORRM --}}
<div class="container-fluid">
    <form action="{{url('/admin/addBook')}}" method="post">
        @csrf
        <div class="row p-0 p-md-4 m-0 my-md-4">
            <div class="col-12 col-md-5 ">
                <div class="book-img-container w-100 h-50">
                    <input type="image" name="" id=""
                        src="https://www.libertybooks.com/image/cache/catalog/01.iqbal%20ahmed/9781408891384-640x996.jpg?q6"
                        alt="" class="book-img-detail"/>
                </div>
            </div>
            <div class="col-12 col-md-7 px-0 px-md-4 ">
                <input type="text" class="book-details mt-4" placeholder="ISBN"><br>
                <input type="text" class="book-details" placeholder="Title"><br>
                <input type="text" class="book-details" placeholder="Author"><br>
                <input type="text" class="book-details" placeholder="Publisher"><br>
                <input type="date" class="book-details" placeholder="Publication Date"><br>
                <input type="text" class="book-details" placeholder="Language"><br>
                <input type="text" class="book-details" placeholder="Edition"><br>
                <textarea class="book-details w-100" name="" id="" cols="30" rows="10" placeholder="Add your decsription:"></textarea>
                <div class="d-flex justify-content-between">
                    <div class="w-50">
                        <label for="" class="h3 text-secondary">Type:</label>
                        <select name="type" id="">
                            <option value="Educative">Educative</option>
                            <option value="Urdu">Urdu</option>
                            <option value="Islamic">Islamic</option>
                            <option value="Leisure">Leisure</option>
                        </select>
                    </div>
                    <input class="w-50" type="text" name="Price" id="" placeholder="Price" class="book-price">
                </div>
            </div>
            <h4 class="my-4">Select 5 Categories:</h4>
            <div class="col-12 d-flex justify-content-between">
                <select name="category1" id="">
                    <option value="Autobiography">Autobiography</option>
                    <option value="Politics">Politics</option>
                    <option value="History">History</option>
                    <option value="Medical">Medical</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option><option value="ExamPrep">Exam Preparation</option>
                    <option value="BusinessAccounting">Business and Accounting</option>
                    <option value="Novel">Novel</option>
                    <option value="Literature">Literature</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Quran">Quran</option>
                    <option value="Tafseer">Tafseer</option>
                    <option value="Hadith">Hadith</option>
                    <option value="General">General</option>
                    <option value="Classic">Classic</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Mystery">Mystery</option>
                    <option value="YA">YA</option>
                </select>

                <select name="category2" id="">
                    <option value="Autobiography">Autobiography</option>
                    <option value="Politics">Politics</option>
                    <option value="History">History</option>
                    <option value="Medical">Medical</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option><option value="ExamPrep">Exam Preparation</option>
                    <option value="BusinessAccounting">Business and Accounting</option>
                    <option value="Novel">Novel</option>
                    <option value="Literature">Literature</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Quran">Quran</option>
                    <option value="Tafseer">Tafseer</option>
                    <option value="Hadith">Hadith</option>
                    <option value="General">General</option>
                    <option value="Classic">Classic</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Mystery">Mystery</option>
                    <option value="YA">YA</option>
                </select>

                <select name="category3" id="">
                    <option value="Autobiography">Autobiography</option>
                    <option value="Politics">Politics</option>
                    <option value="History">History</option>
                    <option value="Medical">Medical</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option><option value="ExamPrep">Exam Preparation</option>
                    <option value="BusinessAccounting">Business and Accounting</option>
                    <option value="Novel">Novel</option>
                    <option value="Literature">Literature</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Quran">Quran</option>
                    <option value="Tafseer">Tafseer</option>
                    <option value="Hadith">Hadith</option>
                    <option value="General">General</option>
                    <option value="Classic">Classic</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Mystery">Mystery</option>
                    <option value="YA">YA</option>
                </select>

                <select name="category4" id="">
                    <option value="Autobiography">Autobiography</option>
                    <option value="Politics">Politics</option>
                    <option value="History">History</option>
                    <option value="Medical">Medical</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option><option value="ExamPrep">Exam Preparation</option>
                    <option value="BusinessAccounting">Business and Accounting</option>
                    <option value="Novel">Novel</option>
                    <option value="Literature">Literature</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Quran">Quran</option>
                    <option value="Tafseer">Tafseer</option>
                    <option value="Hadith">Hadith</option>
                    <option value="General">General</option>
                    <option value="Classic">Classic</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Mystery">Mystery</option>
                    <option value="YA">YA</option>
                </select>

                <select name="category5" id="">
                    <option value="Autobiography">Autobiography</option>
                    <option value="Politics">Politics</option>
                    <option value="History">History</option>
                    <option value="Medical">Medical</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Physics">Physics</option><option value="ExamPrep">Exam Preparation</option>
                    <option value="BusinessAccounting">Business and Accounting</option>
                    <option value="Novel">Novel</option>
                    <option value="Literature">Literature</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Quran">Quran</option>
                    <option value="Tafseer">Tafseer</option>
                    <option value="Hadith">Hadith</option>
                    <option value="General">General</option>
                    <option value="Classic">Classic</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Mystery">Mystery</option>
                    <option value="YA">YA</option>
                </select>
            </div>
            <div class="container text-center mt-4 ">
               <a href=""> 
                <button type="button" class="btn-peach-pink button">ADD Record</button>
                </a>
            </div>
        </div>
    </form>
</div>



<!-- FOOTER -->
@include('layouts/footer')
<!-- FOOTER -->

<script src={{ url('js/category.js') }}></script>

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
