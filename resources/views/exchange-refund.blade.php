<!DOCTYPE html>
<html lang="en">

<head>
    <title>Exchange and Refund Policy</title>
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
</head>

<body>
    <!-- Including Headers -->
    @include('layouts/header-row1')
    @include('layouts/header-row2')

    <!--Main Body -->
    <div class="jumbotron">
        <div class="container ">
            <h1 class="mt-4">Returns And Exchange Policy</h1>
            <h4 class="mt-4"> Terms & Conditions:</h4>
        </div>
        <div class="container ">
            <ol start='1' class="mt-4">
                <li class="mt-2"> Please do not accept if the parcel is unsealed or damaged.</li>
                <li class="mt-2">Customers are not allowed to open the parcel before handing over payment unless it is
                    prepaid.</li>
                <li class="mt-2">In case of any defects or complaints regarding the parcel, please contact customer
                    service within 24 hours.</li>
                <li class="mt-2">Please note that after 24 hours of delivery no complaint will be entertained</li>
            </ol>
        </div>

        <div class="container ">
            <h4 class="mt-2"> Refund/Exchange Policy:</h4>
            <p class="mt-4">Please note that Inkheart does not have any return or exchange policy.However, in
                unavoidable circumstances,Liberty Books will only accept refund/exchange if the customer finds any
                defect or if the wrong product has been delivered,the customer can contact our customer services and
                send images of the product(s) to the given address within 24 hours from the time of delivery.If the
                submitted case is found to be genuine,it will take reasonable time depending upon the nature of the
                case. Furthermore, please note that Liberty books does not cater to any cash refund policy.Liberty Books
                will only refund via IBFT or cheque.Refund/Exchange will be subject to: </p>
            <ol start='1' class="mt-2">
                <li class="mt-2"> The item being repacked properly with the original invoice/receipt.</li>
                <li class="mt-2">The product must be unused with the price tag attached.Once our team has reviewed and
                    is satisfied,exchange or refund will be initiated.</li>
            </ol>
        </div>

        <div class="container ">
            <h4 class="mt-4"> Customer Services:</h4>
            <p> Email: Query@Inkheart.com <br>Call: xx-xxx-xxx <br>Whatsapp: xx-xxx-xxx </p>
        </div>

        <div class="container ">
            <h4 class="mt-4">Order Cancellation:</h4>
            <p class="mt-2">You may cancel your order any time before the order is processed by calling us at
                xx-xxx-xxx during Mon-Fri (9 am-5 pm) and on Sat (9 am-2 pm).</p>
            <p class="mt-2">Once the order is shipped, you will receive the shipping confirmation via email that
                contains the tracking information.</p>
            <p class="mt-2">The Return and Exchange Policy will apply once the product is shipped.</p>
            <p class="mt-2">Inkheart Online Book Store may cancel orders for any reason. Common reasons may include:
                The item is out of stock, pricing errors* or credit card payment is declined by the issuing financial
                institution.</p>
        </div>
    </div>

    <!--Including Footer-->
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
