<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SentByUser;

class SentByUsersController extends Controller
{
    public function showUploadForm()
    {
        return view('properties');
    }

    public function uploadProperties(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',

        ]);

        // Upload image
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Create a new record in the sentbyusers table
        SentByUser::create([

            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],

        ]);

        return redirect()->back()->with('success', 'Property uploaded successfully!');
    }
}
