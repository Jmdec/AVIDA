<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Properties;

class PropertiesController extends Controller
{
    public function index()
{
    // Fetch properties data from the database
    $properties = Properties::all();

    // Pass properties data to the view compactly
    return view('properties.index', compact('properties'));
}

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'link' => 'required|string|max:255',
            'image' => 'required|image|max:100000',
            'name' => 'required|string|max:255',
            'place' => 'required|string|max:10000',
            'price' => 'required|string|max:10000',
        ]);

        // Handle the file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/properties'), $imageName);

        // Create a new Properties instance
        $property = new Properties();
        $property->link = $request->link;
        $property->image = $imageName;
        $property->name = $request->name;
        $property->place = $request->place;
        $property->price = $request->price;
        $property->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Property added successfully!');
    }
    public function destroy($id)
    {
        $property = Properties::findOrFail($id);
        $property->delete();

        return redirect()->back()->with('success', 'property deleted successfully!');
    }
    public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'link' => 'required|string|max:255',
        'image' => 'sometimes|image|max:100000',
        'name' => 'required|string|max:255',
        'place' => 'required|string|max:10000',
        'price' => 'required|string|max:10000',
    ]);

    // Retrieve the property instance from the database
    $property = Properties::findOrFail($id);

    // Update properties of the retrieved instance with new values
    $property->link = $request->link;
    $property->name = $request->name;
    $property->place = $request->place;
    $property->price = $request->price;

    // Handle the image update if a new image is provided
    if ($request->hasFile('image')) {
        // Handle the file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/properties'), $imageName);
        // Delete old image file if exists
        if (file_exists(public_path('images/properties/'.$property->image))) {
            unlink(public_path('images/properties/'.$property->image));
        }
        // Update image property with new image name
        $property->image = $imageName;
    }

    // Save the changes to the database
    $property->save();

    // Redirect back or to a specific route
    return redirect()->back()->with('success', 'Property updated successfully!');
}

}
