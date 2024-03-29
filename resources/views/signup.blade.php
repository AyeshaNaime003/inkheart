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
    <link rel="stylesheet" href="{{'css/utilities.css'}}">

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
                                <!-- Error Handling -->
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <!-- Form-->
                                <form class="mx-1 mx-md-4" action="{{route('signup')}}" method="post" >
                                    <!-- any form being submitted via post method can not be submitted without a CSRF token, give error -->
                                    @csrf
                                    <!-- Name -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-user fa-lg me-3 fa-fw icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                            <input type="text" name="name" id="form3Example1c" class="form-control" />
                                            <span class="text-danger">
                                                @error('name')
                                                    {{$message}}
                                                @enderror 
                                            </span>

                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-envelope fa-lg me-3 fa-fw icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                            <input type="email" name="email" id="form3Example3c" class="form-control" />
                                            <span class="text-danger">
                                                @error('email')
                                                    {{$message}}
                                                @enderror 
                                            </span>

                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-lock fa-lg me-3 fa-fw icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <input type="password" name="password" id="form3Example4c" class="form-control" />
                                            <span class="text-danger">
                                                @error('password')
                                                    {{$message}}
                                                @enderror 
                                            </span>

                                        </div>
                                    </div>

                                    <!-- Repeat Password -->
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fa fa-key fa-lg me-3 fa-fw icon icon mt-4"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4cd">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="form3Example4cd" class="form-control" />
                                            <span class="text-danger">
                                                @error('password_confirmation')
                                                    {{$message}}
                                                @enderror 
                                            </span>

                                        </div>
                                    </div>

                                    <!-- Terms and Service -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" name="checkbox" type="checkbox" value=""
                                            id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            I agree all statements in <a href="{{route('Terms-Conditions')}}">Terms and Conditions <br></a>
                                            <span class="text-danger ">
                                                @php 
                                                    $msg="Please check this box!";
                                                @endphp
                                                @error('checkbox')
                                                    {{$msg}}
                                                @enderror 
                                            </span>
                                        </label> 
                                    </div>

                                    <!-- Register button -->
                                    <div class="d-flex justify-content-center mb-2 mb-lg-1">
                                        <button class="btn bg-peach-pink btn-lg ">Register</button>
                                    </div>
                                    
                                    <!-- Home link -->
                                    <div class="d-flex justify-content-center mb-3">
                                    <!-- <a href="{{ url('/') }}">Home</a> -->
                                        <p class=" mt-2 pt-1 mb-0">Back to <a href= "{{url('/')}}"
                        class="link-danger">Home</a></p>
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
