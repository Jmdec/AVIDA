<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanCalculatorController extends Controller
{
    public function index()
    {
        return view('loan-calculator');
    }

    public function calculate(Request $request)
    {
        $loanAmount = $request->input('loan_amount');
        $downpayment = $request->input('downpayment');
        $interestRate = $request->input('interest_rate');
        $loanTerm = $request->input('loan_term');

        // Calculate remaining balance
        $remainingBalance = $loanAmount - $downpayment;

        // Calculate monthly interest rate
        $monthlyInterestRate = $interestRate / 100 / 12;

        // Calculate number of payments
        $numPayments = $loanTerm;

        // Calculate monthly payment
        $monthlyPayment = ($remainingBalance * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$numPayments));

        // Calculate total payment
        $totalPayment = $monthlyPayment * $numPayments;

        return view('loan-results', compact('loanAmount', 'downpayment', 'interestRate', 'loanTerm', 'monthlyPayment', 'totalPayment', 'remainingBalance'));
    }
}
