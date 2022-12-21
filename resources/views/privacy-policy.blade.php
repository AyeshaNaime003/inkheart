<!DOCTYPE html>
<html lang="en">

<head>
    <title>Privacy Policy</title>
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
            <h1 class="mt-2">Privacy Policy</h1>
            <p class="mt-4">(Effective as of December 21, 2022)</p>
        </div>
        <div class="container ">
            <p class="mt-4">InkHeart works to ensure that your privacy is protected when using our services. This
                website is operated by <strong> Inkheart.com </strong> and this privacy policy applies to it. We ,
                therefore, have a
                policy explaining what personal information is, how we use the information, who has access to the data,
                and your rights regarding the information collected. Your access and use of our website constitute your
                acceptance of our Privacy Policy and Terms of Use.</p>
        </div>

        <div class="container ">
            <h4 class="mt-2"> Personal Data</h4>
            <p class="mt-4">We take responsibility for all the personal data (such as your name, address, email
                address, phone number, and date of birth) that you provide us with, obtained when you subscribe to our
                newsletter or when you create a personal profile.</p>
        </div>

        <div class="container ">
            <h4 class="mt-2"> How do we use your Personal Data?</h4>
            <p class="mt-4">We use the information that we collect to fulfill our commitments to you and to provide
                you with the service that you expect. This includes sending you information and offers for marketing
                purposes. In order to provide you with relevant offers and information, we may analyze your personal
                data. We will only keep your data for as long as necessary to carry out our services to you or for as
                long as we are required by law. After this, your personal data will be deleted.</p>
        </div>

        <div class="container ">
            <h4 class="mt-2">What information does Inkheart.com share with third parties?</h4>
            <p class="mt-4">Inkheart may share your personal information with third parties or affiliates, who
                perform services on our behalf or process authorized transactions. The personal information we share
                with these companies to perform services on our behalf is protected via contractual agreements and
                cannot be shared. We do not sell your information to any third party nor do we disclose your personal
                information to unaffiliated third parties</p>
        </div>

        <div class="container ">
            <h4 class="mt-2">What are your rights?</h4>
            <p class="mt-4">You have the right to request information about the personal data we hold on you. If your
                data is incorrect, incomplete or irrelevant, you can ask to have the information corrected or removed.
            </p>
        </div>

        <div class="container ">
            <h4 class="mt-2">Cookies</h4>
            <p class="mt-4">A cookie is a small text file that is saved to, and, during subsequent visits, retrieved
                from your computer or mobile device. Liberty Books uses cookies to enhance and simplify your visit. We
                do not use cookies to store personal information or to disclose information to third parties.
            </p>
            <p class="mt-4"> There are two types of cookies: <strong>permanent</strong> and <strong> temporary
                </strong> (session cookies). Permanent
                cookies are stored as a file on your computer or mobile device for no longer than 12 months. Session
                cookies are stored temporarily and disappear when you close your browser session.
            </p>
            <p class="mt-4"> We use permanent cookies to store your choice of start page and to store your details. We
                use session cookies when you use the product filtration function and to check if you are logged in. You
                can easily erase cookies from your computer or mobile device using your browser.
            </p>
        </div>

        <div class="container ">
            <h4 class="mt-2">Third-Party cookies</h4>
            <p class="mt-4">We use third-party cookies to collect statistics in aggregate form in analysis tools such
                as Google Analytics and Core Metrics. The cookies used are both permanent and temporary cookies (session
                cookies). The permanent cookies are stored on your computer or mobile device for no longer than 24
                months.
            </p>
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
