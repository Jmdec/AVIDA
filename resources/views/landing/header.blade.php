
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
                                <button class="neo-button" onclick="window.open('https://www.instagram.com/jmdec21')">
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
                                <button class="neo-button" onclick="window.location.href = '/login'">
                                    <i class="fa fa-sign-in fa-2x"></i>
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
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#loanCalculatorModal" data-dismiss="modal" style="width: 200px;">Loan Calculator</button>
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#uploadPropertiesModal" data-dismiss="modal">Upload Properties</button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="uploadPropertiesModal" tabindex="-1" role="dialog" aria-labelledby="uploadPropertiesModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadPropertiesModalLabel">Upload Properties</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form to upload properties -->
                            <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- First row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fullname">Full Name:</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" required placeholder="Input your full name">
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Property Name:</label>
                                            <input type="text" class="form-control" id="name" name="name" required placeholder="Input your property name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="price">Price:</label>
                                            <input type="text" class="form-control" id="price" name="price" required placeholder="Don't use comma">
                                        </div>
                                    </div>

                                    <!-- Second row -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact">Contact:</label>
                                            <input type="text" class="form-control" id="contact" name="contact" required placeholder="Input your contact number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="amenities">Amenities:</label>
                                            <input type="text" class="form-control" id="amenities" name="amenities" required placeholder="Input the amenities included">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required placeholder="Input your email">
                                        </div>
                                    </div>

                                <!-- Third row -->

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="image_path">Image:</label>
                                            <input type="file" class="form-control" id="image_path" name="image_path" accept="image/*" required placeholder="Input your ID">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="id_image">ID Image:</label>
                                            <input type="file" class="form-control" id="id_image" name="id_image" accept="image/*" required placeholder="Input the property image">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="video_path">Video:</label>
                                            <input type="file" class="form-control" id="video_path" name="video_path" accept="video/*" required placeholder="Input the property video">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required placeholder="Input your description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Upload</button>
                            </form>
                        </div>





        </header>
        <div class="modal fade" id="loanCalculatorModal" tabindex="-1" role="dialog" aria-labelledby="loanCalculatorModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loanCalculatorModalLabel">Loan Calculator</h5>
                    </div>
                    <div class="modal-body">
                        <form id="loan-form" class="form-inline">
                            <div class="form-group">
                                <label for="loan_amount">Loan Amount:</label>
                                <input type="text" class="form-control col-sm-8" id="loan_amount" name="loan_amount" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="interest_rate">Interest Rate:</label>
                                <select class="form-control" id="interest_rate" name="interest_rate">
                                    <option value="0.05">5%</option>
                                    <option value="0.06">6%</option>
                                    <option value="0.07">7%</option>
                                    <option value="0.08">8%</option>
                                    <option value="0.09">9%</option>
                                    <option value="0.1">10%</option>
                                    <option value="0.11">11%</option>
                                    <option value="0.12">12%</option>
                                    <option value="0.13">13%</option>
                                    <option value="0.14">14%</option>
                                </select>

                            </div>



                            <button type="submit" class="btn btn-primary" style="margin-left: 1rem;">Calculate</button>
                        </form>
                        <br>
                        <div class="result" id="results">
                            <h2>Results</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Months</th>
                                        <th>Monthly Payment</th>
                                        <th>Total Payment</th>
                                        <th>Total Interest</th>
                                    </tr>
                                </thead>
                                <tbody id="results-body">
                                    <!-- Result rows will be appended here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            /* Styles for modal */
        </style>

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

.login-icon {
    display: inline-block;
    padding: 8px;
    background-color: #007bff; /* Adjust color as needed */
    color: #fff; /* Adjust text color as needed */
    text-decoration: none;
    border-radius: 50%; /* To make it circular */
    transition: background-color 0.3s ease; /* Smooth transition on hover */
}

.login-icon:hover {
    background-color: #0056b3; /* Adjust hover color as needed */
}
.neo-button.sign-in {
  background-color: #3498db; /* Button background color */
  color: white; /* Button text color */
  border: none; /* Remove button border */
  padding: 10px 20px; /* Button padding */
  font-size: 16px; /* Button text size */
  cursor: pointer; /* Show pointer on hover */
  border-radius: 5px; /* Button border radius */
}

.neo-button.sign-in:hover {
  background-color: #2980b9; /* Button background color on hover */
  margin-top: 50px; /* Margin top on hover */
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


