<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--External CSS-->
    <link rel="stylesheet" href={{ 'css/utilities.css' }}>

    <!--Icons and Script Bootstrap-->
    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Signup</title>
</head>

</body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <!-- Signup -->
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <!-- Form-->
                                <form class="mx-1 mx-md-4">

                                    <!-- Name -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-user fa-lg me-3 fa-fw icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                            <input type="text" id="form3Example1c" class="form-control" />

                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-envelope fa-lg me-3 fa-fw icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                            <input type="email" id="form3Example3c" class="form-control" />

                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-lock fa-lg me-3 fa-fw icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <input type="password" id="form3Example4c" class="form-control" />

                                        </div>
                                    </div>

                                    <!-- Repeat Password -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-key fa-lg me-3 fa-fw icon icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                            <input type="password" id="form3Example4cd" class="form-control" />

                                        </div>
                                    </div>

                                    <!-- Terms and Service -->
                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="#!">Terms of service</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-between mx-4 mb-3 mb-lg-4">
                                        <button type="button" class="btn bg-peach-pink btn-lg">Register</button>
                                        <a href={{ url('/') }}><button type="button"
                                                class="btn bg-peach-pink btn-lg">Back to Home</button></a>
                                    </div>

                                </form>

                            </div>

                            <!-- Side Image-->
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://img.freepik.com/free-vector/characters-people-holding-giant-digital-devices_53876-32614.jpg?size=626&ext=jpg"
                                    class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
