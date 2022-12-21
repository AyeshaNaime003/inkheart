<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <!-- Bootstrap Link -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Stylesheets -->
    <!-- stylesheets-->
    <link rel="stylesheet" href={{ url('css/utilities.css') }}>
    <link rel="stylesheet" href={{ url('css/contact.css') }}>

    <!--Script Links-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--icon -->
    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4 mt-4" style="border: 1px solid pink">
                                    <h3 class="mb-4 mt-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <form method="POST" id="contactForm" name="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name"
                                                        id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <!-- Email-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <!-- Subject-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <!-- Message-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message"
                                                        class="btn bg-peach-pink">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch mt-4">
                                <!--Contact Us-->
                                <div class="info-wrap bg-light-pink w-100 p-lg-5 p-4 ">
                                    <h3 class="mb-4 mt-md-4  ">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker mt-2"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone mb-1"></span>
                                        </div>
                                        <div class="text pl-3 ">
                                            <p class="mt-1"><span>Phone:</span> xx-xxx-xxx</p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p class="mt-2"><span>Email:</span> <a
                                                    href="mailto:info@yoursite.com">info@inkheart.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p class="mt-2"><span>Website</span> <a href={{url('homepage')}}>inkheart.com</a></p>
                                        </div>
                                    </div>
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
