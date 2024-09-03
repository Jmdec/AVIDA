<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contactus', [
            'name' => null, // Initialize variables to avoid undefined errors
            'email' => null,
            'message' => null,
        ]);
    }




public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);


    $contact = Contact::create($validatedData);

    // Send email
    try {
        Mail::to('inorganicdrake@gmail.com')->send(new ContactMail($contact->name, $contact->email, $contact->message));

        // Email sent
        return response()->json(['message' => 'Email sent successfully'], 200);
    } catch (\Exception $e) {
        // Email sending failed
        return response()->json(['error' => 'Error sending email: ' . $e->getMessage()], 500);
    }
}
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contactus', ['contacts' => $contacts]);
    }
    public function destroy(Contact $contact)
{
    $contact->delete();
    return redirect()->back()->with('success', 'Contact deleted successfully!');
}
public function showForm()
{
    return view('contact');
}



}
