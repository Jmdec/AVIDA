<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenity; // Add this line to import the Concept model

class AmenityController extends Controller // Corrected the class name
{
    public function index()
    {
        // Fetch properties data from the database
        $amenities = Amenity::all(); // Corrected variable name to plural

        // Pass properties data to the view compactly
        return view('antonio.concept.ameneties', compact('amenities')); // Corrected variable name
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:100000',
        ]);

        // Handle the file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/amenity'), $imageName);

        // Create a new Concept instance
        $amenities = new Amenity();
        $amenities->image = $imageName;

        $amenities->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Concept added successfully!');
    }
}
