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
    <link rel="stylesheet" href={{url("css/utilities.css")}}>
    <link rel="stylesheet" href={{url("css/login.css")}}>

     <!-- icons-->
    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
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
              <form>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3 me-auto p-2 ">Sign in with</p>
                  <button type="button" class=" p-2 bd-highlight btn-circle btn-md border border-white bg-peach-pink btn-floating mx-1">
                    <i class="fa fa-facebook-f"></i>
                  </button>

                  <button type="button" class=" p-2 bd-highlight btn-circle btn-md border border-white bg-peach-pink btn-floating mx-1">
                    <i class="fa fa-twitter"></i>
                  </button>

                  <button type="button" class=" p-2 bd-highlight btn-circle btn-md border border-white bg-peach-pink btn-floating mx-1">
                    <i class="fa fa-linkedin"></i>
                  </button>
                </div>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>

                <!-- Login-->
                <div class="text-center text-lg-start mt-4 pt-2 align-items-center">
                  <button type="button" class=" btn bg-peach-pink btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href= {{url("signup")}}
                      class="link-danger">Register</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>

</body>
</html>
