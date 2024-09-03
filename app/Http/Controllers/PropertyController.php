<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\Lease;
use App\Models\Sale;
class PropertyController extends Controller
{
    public function store(Request $request)
    {
        // Validation rules for the incoming request
        $validatedData = $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric', // Changed to numeric for price
            'contact' => 'required|string|max:255',
            'amenities' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // Image validation
        ]);

        try {
            // Move uploaded image to public directory
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);

            // Create new Property instance and save to database
            Property::create([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'contact' => $validatedData['contact'],
                'amenities' => $validatedData['amenities'],
                'email' => $validatedData['email'],
                'image' => '/images/' . $imageName, // Image path
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Property uploaded successfully');
        } catch (\Exception $e) {
            // Redirect back with error message if any exception occurs
            return redirect()->back()->with('error', 'Failed to upload property: ' . $e->getMessage());
        }
    }
    public function filter($name)
    {
        // Filter properties based on name
        $leaseProperties = Lease::where('name', $name)->get();
        $saleProperties = Sale::where('name', $name)->get();

        // Merge the results from both models
        $properties = $leaseProperties->merge($saleProperties);

        // Return view with filtered properties
        return view('property.index', compact('properties'));
    }
}

