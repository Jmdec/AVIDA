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

    <!--	Css Link
 ========================================================-->
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/css/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/css/style.css">

    <!--	Title
 =========================================================-->
    <title>Avida Land</title>
</head>

<body>

    <!--	Page Loader  -->
    <!--<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
 <div class="d-flex justify-content-center y-middle position-relative">
 <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
 </div>
 </div>
</div>  -->
    <!--	Page Loader  -->

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            @include('landing.header')
            <!--	Header end  -->

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative"
                style="background-image: url('images/banner/rshmpg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-success">Let us</span><br>
                                    Guide you Home</h1><!-- FOR MORE PROJECTS visit: codeastro.com -->
                                <form method="post" action="{{ route('property.filter.submit') }}">
                                    @csrf <!-- Add CSRF token for form submission -->
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="type"
                                                    value="Property" readonly>
                                            </div>
                                        </div>


                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">

                                                <select class="form-control" name="name" id="property_name" required>
                                                    <option value="">Select Name</option>
                                                    @foreach ($names as $name)
                                                        <option value="{{ $name }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter"
                                                    class="btn btn-success w-100">Search Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Selling
                                            Service</a></h5>
                                    <p>Unlock the potential of your assets! Our selling service streamlines the process, ensuring you get top value for your goods. Say goodbye to hassle, and hello to profit.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental
                                            Service</a></h5>
                                    <p>Experience convenience like never before! Our rental service offers a wide range of options to suit your needs. From short-term stays to long leases, find your perfect match effortlessly</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Property
                                            Listing</a></h5>
                                    <p>Discover your dream space! Our property listings feature a diverse range of options, from cozy apartments to spacious estates. Your ideal home awaits.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-diagram text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Legal
                                            Investment</a></h5>
                                    <p>Invest with confidence! Our legal investment services provide expert guidance and support, ensuring your investments are secure and profitable. Take the next step towards financial success today</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->

            <!--	Recent Properties  -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Recent Property</h2>
                        </div>
                        @foreach($uploads as $upload)
                            @if($upload->status == 'Accepted')
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="card position-relative">
                                        <span class="badge badge-success position-absolute" style="transform: rotate(-45deg); top: 5px; left: -10px; z-index: 999;">NEW</span>

                                        <div id="propertyCarousel{{ $loop->iteration }}" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <video width="100%" controls>
                                                        <source src="{{ asset('videos/uploads/' . $upload->video_path) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('images/uploads/' . $upload->image_path) }}" alt="Property Image">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#propertyCarousel{{ $loop->iteration }}" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#propertyCarousel{{ $loop->iteration }}" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $upload->name }}</h5>
                                            <p class="card-text">{{ $upload->description }}</p>
                                            <p class="card-text">Price: {{ $upload->price }}</p>
                                            <p class="card-text">Contact: {{ $upload->contact }}</p>
                                            <p class="card-text">Owner: {{ $upload->fullname }}</p>
                                            <p class="card-text">Amenities: {{ $upload->amenities }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>





            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half"
                style="background-image: url('images/01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-success"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Top Rated</h5>
                                            <p>Join the ranks of the satisfied! Our top-rated services consistently receive glowing reviews and high ratings from delighted customers. Experience excellence firsthand.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experience Quality</h5>
                                            <p>Elevate your standards! Experience quality like never before with our premium services. From meticulous attention to detail to unparalleled customer satisfaction, excellence is our promise.</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-seller flat-medium float-left d-table mr-4 text-success"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experienced Agents</h5>
                                            <p>Trust the experts! Our team of experienced agents brings years of industry knowledge and expertise to the table. With a proven track record of success, your journey is in capable hands.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	why choose us -->

            <!--	How it work -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                                <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success"
                                        aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                                <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non
                                    quisque vestibulum platea ornare ridiculus.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                                <div class="left-arrow"><i class="flaticon-search flat-medium icon-success"
                                        aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                                <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non
                                    quisque vestibulum platea ornare ridiculus.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                                <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i>
                                </div>
                                <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                                <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non
                                    quisque vestibulum platea ornare ridiculus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-secondary"
                style="background-image: url('images/breadcromb.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>


                                    <div class="text-white h5">Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>

                                    <div class="text-white h5">Sale Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>


                                    <div class="text-white h5">Rent Property Available</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-man flat-large text-white" aria-hidden="true"></i>

                                    <div class="text-white h5">Registered Users</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--	Popular Place -->

            <!--	Popular Places -->



            <!--	Footer   start-->
            @include('landing.footer')
            <!--	Footer   start-->


            <!-- Scroll to top -->
            <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i
                    class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
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



</body>

</html>
