<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concept; // Add this line to import the Concept model

class ConceptController extends Controller // Corrected the class name
{
    public function index()
    {
        // Fetch properties data from the database
        $concepts = Concept::all(); // Corrected variable name to plural

        // Pass properties data to the view compactly
        return view('antonio.concept.index', compact('concepts')); // Corrected variable name
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:100000',
        ]);

        // Handle the file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/concept'), $imageName);

        // Create a new Concept instance
        $concept = new Concept();
        $concept->image = $imageName;

        $concept->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Concept added successfully!');
    }

    public function destroy($id)
    {
        $concept = Concept::findOrFail($id);
        $concept->delete();

        return redirect()->back()->with('success', 'Concept deleted successfully!');
    }
}
