<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 30px;
            text-align: center;
        }

        .result h2 {
            color: #28a745;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Loan Calculator</h1>
    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#loanCalculatorModal">
        Open Loan Calculator
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="loanCalculatorModal" tabindex="-1" role="dialog" aria-labelledby="loanCalculatorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loanCalculatorModalLabel">Loan Calculator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="loan-form">
                    <div class="form-group">
                        <label for="loan_amount">Loan Amount:</label>
                        <input type="number" class="form-control" id="loan_amount" name="loan_amount" required>
                    </div>
                    <div class="form-group">
                        <label for="downpayment">Downpayment:</label>
                        <input type="number" class="form-control" id="downpayment" name="downpayment" required>
                    </div>
                    <div class="form-group">
                        <label for="interest_rate">Interest Rate (%):</label>
                        <input type="number" class="form-control" id="interest_rate" name="interest_rate" required>
                    </div>
                    <div class="form-group">
                        <label for="loan_term">Loan Term (months):</label>
                        <input type="number" class="form-control" id="loan_term" name="loan_term" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Calculate</button>
                </form>
                <div class="result" id="results"></div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and jQuery (needed for Bootstrap functionality) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    document.getElementById('loan-form').addEventListener('submit', function (e) {
        e.preventDefault();
        calculateLoan();
    });

    function calculateLoan() {
        const loanAmount = parseFloat(document.getElementById('loan_amount').value);
        const downpayment = parseFloat(document.getElementById('downpayment').value);
        const interestRate = parseFloat(document.getElementById('interest_rate').value) / 100;
        const loanTerm = parseFloat(document.getElementById('loan_term').value);

        const principal = loanAmount - downpayment;
        const monthlyInterestRate = interestRate / 12;
        const numberOfPayments = loanTerm;

        const x = Math.pow(1 + monthlyInterestRate, numberOfPayments);
        const monthlyPayment = (principal * x * monthlyInterestRate) / (x - 1);

        const totalPayment = monthlyPayment * numberOfPayments;
        const totalInterest = totalPayment - principal;

        const remainingBalance = loanAmount - downpayment;

        const resultsDiv = document.getElementById('results');
        resultsDiv.innerHTML = `
        <h2>Results</h2>
        <p>Remaining Balance: ₱${remainingBalance.toFixed(2)}</p>
        <br>
        <p>Monthly Payment: ₱${monthlyPayment.toFixed(2)}</p>
        <p>Total Payment: ₱${totalPayment.toFixed(2)}</p>
        <p>Total Interest: ₱${totalInterest.toFixed(2)}</p>

        `;
    }
</script>

</body>
</html>
