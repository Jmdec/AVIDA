<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use Illuminate\Support\Facades\Log;
class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        $names = $sales->pluck('name')->unique();
        return view('sales.index', compact('sales', 'names'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:20480',

            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string',
            'contact' => 'required|string|digits:11', // Assuming contact is a 10-digit string
            'amenities' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Handle file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/sale'), $imageName);

        // Create a new Sale instance
        $sale = new Sale();
        $sale->image = $imageName;
        $sale->name = $request->name;
        $sale->location = $request->location;
        $sale->description = $request->description;
        $sale->price = $request->price;
        $sale->contact = $request->contact; // Storing contact information
        $sale->amenities = $request->amenities;
        $sale->status = $request->status;  // Storing amenities information
        $sale->save();

        // Redirect back or to a specific route
        return redirect()->route('sales.index')->with('success', 'Sale created successfully');
    }
    public function destroy($id)
{
    try {
        // Find the sale record by ID
        $sale = Sale::findOrFail($id);

        // Delete the sale record
        $sale->delete();

        // Redirect back or to a specific route
        return redirect()->route('sales.index')->with('success', 'Sale deleted successfully');
    } catch (\Exception $e) {
        // If the sale record cannot be found or any other error occurs
        return redirect()->route('sales.index')->with('error', 'Failed to delete sale: ' . $e->getMessage());
    }
}
public function update(Request $request, $id)
{
    $sale = Sale::findOrFail($id);

    $request->validate([
        'image' => 'image|max:100000',
        'name' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'units' => 'required|string|max:255',
        'location' => 'required|string|max:255',
    ]);

    try {
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $sale->image = $filename;
        }

        // Update sale information
        $sale->name = $request->name;
        $sale->price = $request->price;
        $sale->description = $request->description;
        $sale->status = $request->status;
        $sale->units = $request->units;
        $sale->location = $request->location;

        $sale->save();

        return redirect()->route('sale.index')->with('success', 'Card item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating card item: ' . $e->getMessage());
        return redirect()->route('sale.index')->with('error', 'Failed to update card item.');
    }
}

}
