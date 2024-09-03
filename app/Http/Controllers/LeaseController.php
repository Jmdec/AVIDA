<?php

namespace App\Http\Controllers;
use App\Models\Lease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class LeaseController extends Controller
{
    public function index()
    {
        $leases = Lease::all(); // Corrected variable name
        $names = $leases->pluck('name')->unique();
        return view('leasing.index', compact('leases', 'names'));
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
        $request->image->move(public_path('images/lease'), $imageName);

        // Create a new Sale instance
        $lease = new Lease();
        $lease->image = $imageName;
        $lease->name = $request->name;
        $lease->location = $request->location;
        $lease->description = $request->description;
        $lease->price = $request->price;
        $lease->contact = $request->contact; // Storing contact information
        $lease->amenities = $request->amenities; // Storing amenities information
        $lease->status = $request->status;
        $lease->save();

        // Redirect back or to a specific route
        return redirect()->route('lease.index')->with('success', 'Sale created successfully');
    }
    public function destroy(Lease $lease)
{
    try {
        // Find the sale record by ID
        $lease = Lease::findOrFail($lease);

        // Delete the sale record
        $lease->delete();

        // Redirect back or to a specific route
        return redirect()->route('lease.index')->with('success', 'Lease deleted successfully');
    } catch (\Exception $e) {
        // If the sale record cannot be found or any other error occurs
        return redirect()->route('lease.index')->with('error', 'Failed to delete lease: ' . $e->getMessage());
    }
}
public function update(Request $request, $id)
{
    $lease = Lease::findOrFail($id);

    $request->validate([
        'image' => 'image|max:100000',
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'amenities' => 'required|string|max:255',

    ]);

    try {
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $lease->image = $filename;
        }

        // Update sale information
        $lease->name = $request->name;
        $lease->description = $request->description;
        $lease->price = $request->price;

        $lease->contact = $request->contact;
        $lease->amenities = $request->amenities;

        $lease->save();

        return redirect()->route('lease.index')->with('success', 'Card item updated successfully.');
    } catch (\Exception $e) {
        Log::error('Error occurred while updating card item: ' . $e->getMessage());
        return redirect()->route('lease.index')->with('error', 'Failed to update card item.');
    }
}


}


