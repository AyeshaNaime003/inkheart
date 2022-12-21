<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shipping and Delivery</title>
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
  <link rel="stylesheet" href={{url("css/utilities.css")}}>
  <link rel="stylesheet" href={{url("css/homepage.css")}}>
</head>
<body>


    @include('layouts/header-row1')
    @include('layouts/header-row2')

    <div class="jumbotron">
        <div class="container ">
          <h1 class="mt-4">Shipping & Delivery</h1>
          <p class="mt-4"> We pack your order with extra care and get it to you as fast as we can.</p>
          <p>Processing and Delivery</p>
        </div>
        <div class="container mt-4">
            <table class=" table table-hover">
            <thead class="bg-light-pink">
              <tr>
                <th scope="col">Product Type</th>
                <th scope="col">Status</th>
                <th scope="col">Processing and Transit Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>In Stock Book at Warehouse</td>
                <td>Available for Sale</td>
                <td>3 - 5 Working Days Max (Varies for Remote Areas)</td>
              </tr>
              <tr>
                <td>Books being arranged from other locations</td>
                <td>Available for Sale</td>
                <td>4 - 5 Working Days Max (prior intimation on Special Cases)</td>
              </tr>
              <tr>
                <td>Unreleased Books</td>
                <td>Pre-Order</td>
                <td>Upon availability of product/Release</td>
              </tr>
              <tr>
                <td>Import a book service / Out of stock books</td>
                <td>Request a book</td>
                <td>5 to 7 weeks after confirmation and advance payment</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="container mt-4">
            <h3>Shipping Rates</h3>
            <p class="mt-4"> 170 Rs. Flat on all orders.</p>
            <p>International customers have to pay in advance for their order along with the shipping charges. Shipping charges will be communicated via email.</p>
        </div>
        <div class="container mt-4 mb-4">
            <h3>Track Your Order</h3>
            <p class="mt-4"> You can check the status of a current order with your order number and email address. As soon as your order ships, we'll send you a confirmation email that includes a tracking number.</p>
            <p>*Conditions apply</p>
        </div>
      </div>
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
