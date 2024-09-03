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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">

            <div class="top-header bg-secondary">
                <div class="container">

                    <div class="row">
                        <div class="col-md-8">

                            <ul class="top-contact list-text-white  d-table">
                               <li> <div id="google_translate_element"></div></li>
                                <li><a href="#"><i class="fas fa-phone-alt text-success mr-1"></i>0945-675-4591</a></li>
                                <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>decastrojustin24@gmail.com</a></li>

                            </ul>
                        </div>

                        <div class="col-md-4">
                            <div class="social-buttons">


                                <button class="neo-button" onclick="window.open('https://www.facebook.com/tine.tainy')">
                                    <i class="fa fa-facebook fa-2x"></i>
                                </button>
                                <button class="neo-button" onclick="window.open('https://www.instagram.com/jmdec21)">
                                    <i class="fa fa-instagram fa-2x"></i>
                                </button>

                                <a href="mailto:decastrojustin24@gmail.com">
                                    <button class="neo-button">
                                        <i class="fa fa-envelope fa-2x"></i>
                                    </button>
                                </a>
                                <button class="neo-button" onclick="window.open('https://web.telegram.org/k/#5645362073')">
                                    <i class="fa fa-telegram fa-2x"></i>
                                </button>





                                  </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/avidalogo.svg" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>

										<li class="nav-item"> <a class="nav-link" href="/forsaleland">For Sale</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="/forleaseland">For Lease</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="/contactform">Contact</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="/award">Awards</a> </li>
                                        <li class="nav-item"> <a class="nav-link" href="/appointment">Request Viewing</a> </li>
                                    </ul>

<div>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>



        </header>
        <div id="loader"></div>
        <script>
            var botman = botmanInit();
            function botmanInit() {
                return BotMan.create({
                    baseUrl: '/botman',
                    introMessage: 'Hello! How can I assist you?',
                    chatServer: '/botman',
                    title: 'ChatBot',
                    mainColor: '#408EAF',
                });
            }
        </script>
        <script src='/js/widget.js'></script>
        <script>
            // BotMan widget configuration
            var botmanWidget = {

                aboutText: 'Say Hi',
                introMessage: 'Hi, I\'m Justin the Real Estate Bot. How can I assist you today?'
            };

            // Function to handle introductory message
            function handleIntroMessage() {
                var introMessageElement = document.querySelector('.botman-about-text');
                if (introMessageElement) {
                    introMessageElement.innerHTML = botmanWidget.aboutText;
                }
            }

            // Call the function when the page loads
            window.addEventListener('load', handleIntroMessage);
        </script>
<style>

    .social-buttons{
    margin: 8px;
    display: flex;
    justify-content: end;

}

.social-buttons button{

    margin-right:10px;
}

.neo-button{
    width:30px;
    height:30px;
   cursor: pointer;
    border:none;
    outline: none;
    border-radius: 11px;
background: linear-gradient(145deg, #5bc6ff, #4da7db);
box-shadow:  6px 6px 13px #489dcf,
             -6px -6px 13px #62d5ff;



}


.neo-button:hover{
    width:30px;
    height:30px;
    border:none;
    outline: none;
    border-radius: 11px;
background: linear-gradient(145deg, #4da7db, #5bc6ff);
box-shadow: inset 6px 6px 13px #489dcf,
            inset -6px -6px 13px #62d5ff;

}

.neo-button .fa{

 color:#eee;
}
</style>
<script src="js/element.js"></script>
<script>
    function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: 'en', // Change this to your website's primary language code
      includedLanguages: 'zh-CN,en,fr,ja', // Languages to display in the widget (Chinese and English in this case)
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE, // Layout style
      autoDisplay: false, // Prevent auto-display of the widget
    },
    'google_translate_element' // ID of the HTML element to attach the widget to
  );
}

</script>



</head>
<body>



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


<body>

    <link rel="stylesheet" type="text/css" href="css_form/style.css">
    <link rel="stylesheet" type="text/css" href="css_form/bootstrap.min.css">

    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Request Viewing</h1>
Looking for your dream home? Don't miss out on the opportunity to explore your potential new home in person! Requesting a property viewing is the perfect way to get a firsthand look at the features and ambiance of the property.
<br>
<p>During your viewing, you'll be able to:</p>
<ul>
    <li>Experience the layout and spaciousness of each room.</li>
    <li>Evaluate the neighborhood and nearby amenities.</li>
    <li>Ask questions and gather additional information from our knowledgeable agents.</li>
</ul>
Our team is here to assist you every step of the way. Simply fill out the form below to schedule your viewing appointment. We look forward to helping you find the perfect home!

						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form id="appointmentForm" action="{{ route('appointment.store') }}" method="POST">
                                @csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
                                            <input class="form-control" type="text" id="name" name="name" required>
                                            <span class="form-label">Name</span>
                                        </div>

									</div>
									<div class="col-md-6">
										<div class="form-group">
                                            <input class="form-control" type="text" id="email" name="email" required>
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" id="date" name="date" required>
											<span class="form-label">Date</span>
										</div>
									</div>
                                    <div class="col-md-6">
										<div class="form-group">
                                            <input class="form-control" type="time" id="time" name="time" required>
											<span class="form-label">Time</span>
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Transaction</span>
                                            <select class="form-control" id="transaction_type" name="transaction_type" required>
                                                <option value="viewing">Viewing</option>
                                                <option value="booking">Booking</option>
                                                <option value="check_inquiry">Check Inquiry</option>
                                                <option value="check_release">Check Release</option>

                                            </select>
											<span class="select-arrow"></span>
										</div>
									</div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" id="message" name="message" required></textarea>

                                                <span class="form-label">Message</span>
                                            </div>
                                        </div>
                                    </div>






								<div class="form-btn">
									<button class="submit-btn">Request Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script>
        document.getElementById("appointmentForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission

            // Submit the form using AJAX
            var formData = new FormData(this);
            fetch(this.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        alert("Appointment booked successfully!"); // Display success message
                        this.reset(); // Reset the form
                    } else {
                        throw new Error('Network response was not ok.');
                    }
                })
                .catch(error => {
                    console.error('There was an error!', error);
                    alert("Error booking appointment. Please try again later."); // Display error message
                });
        });
    </script>
	<script src="js_form/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>




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
                                <p>Why customers choose us: Our commitment to excellence has earned us top ratings among our clients.</p>
                            </div>
                        </li>
                        <li class="mb-4 text-white d-flex">
                            <i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
                            <div class="pl-2">
                                <h5 class="mb-3">Experience Quality</h5>
                                <p>Why customers choose us: We provide unparalleled quality in every aspect of our services.</p>
                            </div>
                        </li>
                        <li class="mb-4 text-white d-flex">
                            <i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
                            <div class="pl-2">
                                <h5 class="mb-3">Experienced Agents</h5>
                                <p>Why customers choose us: Our team consists of experienced agents who are dedicated to meeting your needs.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>





		@include('landing.footer')
		<!--	Footer   start-->


        <!-- Scroll to top -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#loan_amount').on('input', function () {
                    // Remove existing commas and spaces from the input value
                    var value = $(this).val().replace(/[, ]/g, '');
                    // Add commas every three digits
                    $(this).val(value.replace(/\B(?=(\d{3})+(?!\d))/g, ','));
                });
            });

            document.getElementById('loan-form').addEventListener('submit', function (e) {
                e.preventDefault();
                calculateLoan();
            });

            function formatCurrency(amount) {
                // Add comma separators for thousands and round to 2 decimal places
                return amount.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            function calculateLoan() {
                // Parse the loan amount value and remove commas
                const loanAmount = parseFloat(document.getElementById('loan_amount').value.replace(/,/g, ''));
                const interestRate = parseFloat(document.getElementById('interest_rate').value);
                const loanTerm = 12; // Fixed to 12 for simplicity

                const monthlyInterestRate = interestRate / 12;
                const resultsBody = document.getElementById('results-body');
                resultsBody.innerHTML = ''; // Clear previous results

                for (let months of [12, 18, 24, 30, 36]) {
                    const x = Math.pow(1 + monthlyInterestRate, months);
                    const monthlyPayment = (loanAmount * x * monthlyInterestRate) / (x - 1);
                    const totalPayment = monthlyPayment * months;
                    const totalInterest = totalPayment - loanAmount;

                    // Create and append table row
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${months}</td>
                        <td>₱${formatCurrency(monthlyPayment)}</td>
                        <td>₱${formatCurrency(totalPayment)}</td>
                        <td>₱${formatCurrency(totalInterest)}</td>`;
                    resultsBody.appendChild(row);
                }
            }
        </script>





    </header>
    <div id="loader"></div>
    <script>
        var botman = botmanInit();
        function botmanInit() {
            return BotMan.create({
                baseUrl: '/botman',
                introMessage: 'Hello! How can I assist you?',
                chatServer: '/botman',
                title: 'ChatBot',
                mainColor: '#408EAF',
            });
        }
    </script>
    <script src='/js/widget.js'></script>
    <script>
        // BotMan widget configuration
        var botmanWidget = {

            aboutText: 'Say Hi',
            introMessage: 'Hi, I\'m Justin the Real Estate Bot. How can I assist you today?'
        };

        // Function to handle introductory message
        function handleIntroMessage() {
            var introMessageElement = document.querySelector('.botman-about-text');
            if (introMessageElement) {
                introMessageElement.innerHTML = botmanWidget.aboutText;
            }
        }

        // Call the function when the page loads
        window.addEventListener('load', handleIntroMessage);
    </script>
<style>

.social-buttons{
margin: 8px;
display: flex;
justify-content: end;

}

.social-buttons button{

margin-right:10px;
}

.neo-button{
width:30px;
height:30px;
cursor: pointer;
border:none;
outline: none;
border-radius: 11px;
background: linear-gradient(145deg, #5bc6ff, #4da7db);
box-shadow:  6px 6px 13px #489dcf,
         -6px -6px 13px #62d5ff;



}


.neo-button:hover{
width:30px;
height:30px;
border:none;
outline: none;
border-radius: 11px;
background: linear-gradient(145deg, #4da7db, #5bc6ff);
box-shadow: inset 6px 6px 13px #489dcf,
        inset -6px -6px 13px #62d5ff;

}

.neo-button .fa{

color:#eee;
}
</style>
<script src="js/element.js"></script>
<script>
function googleTranslateElementInit() {
new google.translate.TranslateElement(
{
  pageLanguage: 'en', // Change this to your website's primary language code
  includedLanguages: 'zh-CN,en,fr,ja', // Languages to display in the widget (Chinese and English in this case)
  layout: google.translate.TranslateElement.InlineLayout.SIMPLE, // Layout style
  autoDisplay: false, // Prevent auto-display of the widget
},
'google_translate_element' // ID of the HTML element to attach the widget to
);
}

</script>
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





        <!-- Modal -->
