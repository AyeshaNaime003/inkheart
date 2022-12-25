<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- stylesheets-->
    <link rel="stylesheet" href="{{url('css/utilities.css')}}">
    <link rel="stylesheet" href="{{url('css/login.css')}}">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <title>Change Password</title>
</head>
<body>

<!-- show warning message if password can not be updated -->
  @if (session('status') || session('pswd_msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{session('pswd_msg')}}
            {{ session('status') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    
    <section class="vh-100">
        <div class="container-fluid h-custom" >
          <div class="row d-flex justify-content-center align-items-center h-100 ">

          <!--Side Image-->
            <div class="col-md-9 col-lg-6 col-xl-5 float-lg-left ">
              <img src="https://img.freepik.com/free-vector/characters-people-holding-giant-digital-devices_53876-32614.jpg?size=626&ext=jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <!-- Form-->
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-4">
              <form action="{{url('updated-password')}}" method="post">
                <!-- any form being submitted via post method can not be submitted without a CSRF token, give error -->
                @csrf

                <!-- Previous Password input -->
                <div class="form-outline mb-3">
                <label class="form-label" for="prev_psd">Previous Password</label>
                  <input type="password" name="prev_password" id="prev_psd" class="form-control form-control-lg"/>
                  <!-- <label class="form-label" for="form3Example4">Password</label> -->
                  <span class="text-danger">
                      @error('prev_password')
                          {{$message}}
                      @enderror 
                  </span>
                </div>

                <!-- New Password input -->
                <div class="form-outline mb-3">
                <label class="form-label" for="new_psd">New Password</label>
                  <input type="password" name="new_password" id="new_psd" class="form-control form-control-lg"/>
                  <!-- <label class="form-label" for="form3Example4">Password</label> -->
                  <span class="text-danger">
                      @error('new_password')
                          {{$message}}
                      @enderror 
                  </span>
                </div>

                <!-- Confirm Password input -->
                <div class="form-outline mb-3">
                <label class="form-label" for="confirm_psd">Confirm Password</label>
                  <input type="password" name="password_confirmation" id="confirm_psd" class="form-control form-control-lg" />
                  <!-- <label class="form-label" for="form3Example4">Password</label> -->
                  <span class="text-danger">
                      @error('password_confirmation')
                          {{$message}}
                      @enderror 
                  </span>
                </div>

                <!-- Login-->
                <div class="text-center text-lg-start mt-4 pt-2 align-items-center">
                  <button type="submit" class=" btn bg-peach-pink btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Enter</button>
                    <p class=" mt-2 pt-1 mb-0">Back to <a href= "{{url('/')}}"
                        class="link-danger">Home</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>

</body>
</html>
