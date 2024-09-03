<?php
// app/Http/Controllers/EmailController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\SentEmail;
class EmailController extends Controller
{
    public function create()
    {
        return view('emails.create');
    }
    public function email()
    {
        // Retrieve all data from the 'sent_emails' table
        $emails = SentEmail::all();

        // Return the retrieved data to a view
        return view('emails.index', ['emails' => $emails]);
    }
    public function send(Request $request)
    {
        $data = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' =>$request->phone,
            'inquiry_type' => $request->inquiry_type,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new SendEmail($data));

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}
