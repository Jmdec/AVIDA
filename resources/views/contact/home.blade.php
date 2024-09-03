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

    <style>
        /* Custom Styles */

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-send {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-send:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
		@include('landing.header')
        <!--	Header end  -->

        <!--	Banner Start   -->

        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center mb-4">Contact Us Form</h1>
                                <form action="{{ route('email.send') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fullname">Full Name *</label>
                                                <input id="fullname" type="text" name="fullname" class="form-control" placeholder="Please enter your fullname *" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number *</label>
                                                <input id="phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone number *" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Email *</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inquiry_type">Specify your Inquiry Type *</label>
                                                <select id="inquiry_type" name="inquiry_type" class="form-control" required="required">
                                                    <option value="">Select Inquiry Type</option>
                                                    <option value="commercial">Commercial</option>
                                                    <option value="residential">Residential</option>
                                                    <option value="parking">Parking</option>
                                                    <option value="condominium">Condominium</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="subject">Subject *</label>
                                                <input id="subject" type="text" name="subject" class="form-control" placeholder="Please enter your subject *" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="message">Message *</label>
                                                <textarea id="message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success btn-send btn-block">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                                @if (session('message'))
                                    <p class="message">{{ session('message') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--	Banner End  -->

        <!--	Text Block One
		======================================================-->

		<!-----  Our Services  ---->

        <!--	Recent Properties  -->

		<!--	Recent Properties  -->

        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex">
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Top Rated</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex">
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex">
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experienced Agents</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
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


        <!--	How It Work -->

        <!--	Achievement
        ============================================================-->


        <!--	Popular Place -->

        <!--	Popular Places -->



        <!--	Footer   start-->
		@include('landing.footer')
		<!--	Footer   start-->


        <!-- Scroll to top -->
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
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
