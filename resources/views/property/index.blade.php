<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">
<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/css/style.css">

<!--	Title
	=========================================================-->
<title>Avida Land</title>
</head>
<body>


@csrf
<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
		@include('landing.header')
        <!--	Header end  -->

        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/rshmpg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">

                </div>
            </div>
        </div>
        <!--	Banner End  -->

        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                        <h2 class="text-secondary double-down-line text-center mb-5">Filtered Result</h2></div>
                </div>

<!-- Display the filtered properties -->
<link rel="stylesheet" href="/css/single.product.css">
<!-- Text Block One -->

<section class="single-product">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($properties as $property)
            <div class="row">
                <div class="col-md-5">
                    @if($property->status === 'For Sale')
                    <img src="{{ asset('images/sale/' . $property->image) }}" alt="{{ $property->name }}">
                    @elseif($property->status === 'For Lease')
                    <img src="{{ asset('images/lease/' . $property->image) }}" alt="{{ $property->name }}">
                    @endif
                </div>
                <div class="col-md-7">
                    <div class="single-product-title">
                        <h3>{{ $property->name }}</h3>
                    </div>
                    <div class="single-product-description">
                        <p class="details">{{ $property->description }}</p>
                        <h6 class="price">&#8369;{{ $property->price }}</h6>
                    </div>
                    <hr>
                    <div class="amenities">
                        <!-- Assuming $property->amenities is an array -->
                        <ul>
                            <h6 class="amenities">   {{ $property->amenities }}
                        </ul>
                    </div>
                    <div class="contact">
                        <i class="fa-solid fa-phone"></i> {{ $property->contact }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


            </div>
        </div>

		<!--	Recent Properties  -->

        <!--	Why Choose Us -->

        <!-- Why Choose Us Section -->

        <!-- How It Works Section -->

        <!-- How It Works Section -->

        <!-- Achievement Section -->
        <div class="full-row overlay-secondary" style="background-image: url('images/breadcromb.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="text-white h5">Property Available</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="text-white h5">Sale Property Available</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <div class="text-white h5">Rent Property Available</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms">
                                <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <div class="text-white h5">Registered Users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Wrapper End -->

<!--	Js Link
============================================================-->
<script src="js/js/jquery.min.js"></script>
<!--jQuery Layer Slider -->
<script src="js/js/greensock.js"></script>
<script src="js/js/layerslider.transitions.js"></script>
<script src="js/js/layerslider.kreaturamedia.jquery.js"></script>
<!--jQuery Layer Slider -->
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
