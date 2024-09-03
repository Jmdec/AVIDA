<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator - Results</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="container">
    <h1>Loan Calculation Results</h1>
    <h2>Loan Details</h2>
    <p>Loan Amount: ₱{{ $loanAmount }}</p>
    <p>Downpayment: ₱{{ $downpayment }}</p>
    <p>Interest Rate: {{ $interestRate }}%</p>
    <p>Loan Term: {{ $loanTerm }} months</p>
    <h2>Loan Calculation Results</h2>
    <p>Monthly Payment: ₱{{ $monthlyPayment }}</p>
    <p>Total Payment: ₱{{ $totalPayment }}</p>
    <p>Remaining Balance: ₱{{ $remainingBalance }}</p>
</div>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

p {
    margin-bottom: 10px;
}

    </style>
</body>
</html>
