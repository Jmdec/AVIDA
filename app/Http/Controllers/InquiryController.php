<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Inquiry;
use App\Mail\InquiryMail;

class InquiryController extends Controller
{
    public function send_inquiry(Request $request) {
        $inquiry = Inquiry::create($request->all());

        Mail::to($inquiry->email)->send(new InquiryMail($inquiry));

        return redirect('/contactus');
    }

    public function index()
    {
        $inquiries = Inquiry::all();
        return view('contactus', compact('inquiries'));
    }
}
