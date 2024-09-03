<?php

namespace App\Http\Controllers;

use App\Models\Financing;
use Illuminate\Http\Request;

class FinancingController extends Controller
{
    public function index()
    {
        $financing = Financing::all();
        return view('financing.index', compact('financing'));
    }

    public function store(Request $request)
{
    // Validate request data
    $validatedData = $request->validate([
        'name' => 'required',
        'amount' => 'required|numeric',
        'duration' => 'required',
        'interest_rate' => 'required|numeric',
    ]);

    // Extract validated data
    $principal = $validatedData['amount'];
    $interestRate = $validatedData['interest_rate'] / 100; // Convert interest rate to decimal
    $duration = $validatedData['duration']; // Extracted from the form, e.g., "12 months"

    // Extract number of months from duration
    preg_match('/\d+/', $duration, $matches);
    $totalMonths = isset($matches[0]) ? intval($matches[0]) : 0; // Extract the number of months

    // Calculate total payment amount using compound interest formula
    $totalPayment = $principal * pow((1 + $interestRate / 12), $totalMonths); // Ensure $principal and $totalMonths are numeric

    // Add total payment amount to the validated data
    $validatedData['total_payment'] = $totalPayment;

    // Create financing record
    Financing::create($validatedData);

    // Pass the result $totalPayment to the view
    return redirect()->back()->with(['success' => 'Financing record created successfully.', 'totalPayment' => $totalPayment]);
}

    public function show($id)
    {
        return view('financing.show', ['financing' => Financing::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('financing.edit', ['financing' => Financing::findOrFail($id)]);
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'payment_status' => 'required', // Add validation rule for the payment status field
    ]);

    // Update only the payment status field
    Financing::findOrFail($id)->update(['payment_status' => $validatedData['payment_status']]);

    return redirect()->back()->with('success', 'Payment status updated successfully.');
}

    public function destroy($id)
    {
        Financing::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Financing record deleted successfully.');
    }
}
