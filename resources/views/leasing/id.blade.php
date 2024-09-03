<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Avida Land</title>

    <!-- Meta Tags -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Css Link -->
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/css/style.css">
</head>
<body>



        <!-- Header start -->
        @include('landing.header')
        <!-- Header end -->

      <link rel="stylesheet" href="/css/single.product.css">
        <!-- Text Block One -->

                <section class="single-product">
                    <div class="container">
                        <div class="row justify-content-center">

                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="{{ asset('images/lease/' . $leases->image) }}" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="single-product-title">
                                            <h3>{{ $leases->name }}</h3>
                                        </div>
                                        <div class="single-product-description">
                                            <p class="details">{{ $leases->description }}</p>
                                            <h6 class="price">&#8369;{{ $leases->price }}</h6>
                                        </div>
                                        <hr>
                                        <div class="amenities">
                                            <ul>
                                                <li>{{ $leases->amenities }}</li>

                                            </ul>
                                        </div>
                                        <div class="contact">
                                        <i class="fa-solid fa-phone"></i> {{ $leases->contact }}
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                </section>



        <!-- Js Link -->
        <script src="js/js/jquery.min.js"></script>
        <!-- jQuery Layer Slider -->
        <script src="js/js/greensock.js"></script>
        <script src="js/js/layerslider.transitions.js"></script>
        <script src="js/js/layerslider.kreaturamedia.jquery.js"></script>
        <!-- jQuery Layer Slider -->
        <script src="js/js/popper.min.js"></script>
        <script src="js/js/bootstrap.min.js"></script>
        <script src="js/js/owl.carousel.min.js"></script>
        <script src="js/js/tmpl.js"></script>
        <script src="js/js/draggable-0.1.js"></script>
        <script src="js/js/jquery.slider.js"></script>
        <script src="js/js/wow.js"></script>
        <script src="js/js/YouTubePopUp.jquery.js"></script>
        <script src="js/js/validate.js"></script>
        <script src="js/js/jquery.cookie.js"></script>
        <script src="js/js/custom.js"></script>
        @include('landing.footer')
</body>
</html>
