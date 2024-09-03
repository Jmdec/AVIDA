<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'required',
            'transaction_type' => 'required|in:booking,check_inquiry,check_release,viewing',
        ]);

        Appointment::create($validatedData);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function appointments()
    {
        $appointments = Appointment::all();
        return view('admin.appointment', ['appointments' => $appointments]);
    }

    public function acceptAppointment($id) // Assuming this is your method for accepting appointments
{
    $appointment = Appointment::findOrFail($id);

    // Update the appointment status to "Accepted"
    $appointment->status = 'Accepted';
    $appointment->save();

    // Send email notification to the appointment holder
    $time_formatted = date('h:i A', strtotime($appointment->time)); // Format time with AM/PM indication
    $date_formatted = date('F j, Y', strtotime($appointment->date)); // Format date as "February 12, 2024"
    $data = [
        'subject' => 'Good Day! MR/MS ' . $appointment->name . ', Your request  ' . ucfirst(str_replace('_', ' ', $appointment->transaction_type)) . ' on ' . $date_formatted . ' at ' . $time_formatted . ' has been accepted. Thank You!',

        'fullname' => $appointment->name,
        'date' => $date_formatted,
        'message' => 'We look forward to seeing you on the requested day!',
    ];



    Mail::to($appointment->email)->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Appointment accepted successfully.');
}

public function cancelAppointment($id)
{
    $appointment = Appointment::findOrFail($id);

    // Update the appointment status to "Canceled"
    $appointment->status = 'Canceled';
    $appointment->save();

    // Format date and time
    $time_formatted = date('h:i A', strtotime($appointment->time)); // Format time with AM/PM indication
    $date_formatted = date('F j, Y', strtotime($appointment->date)); // Format date as "February 12, 2024"

    // Reason for cancellation
    $reason = 'We apologize for any inconvenience caused.';

    // Send email notification to the appointment holder
    $data = [
        'subject' => 'Appointment Canceled',
        'fullname' => $appointment->name,
        'date' => $date_formatted,
        'time' => $time_formatted,
        'message' => 'Good Day! MR/MS ' . $appointment->name . ', Your appointment on ' . $date_formatted . ' at ' . $time_formatted . ' has been canceled. ' . $reason,

    ];

    Mail::to($appointment->email)->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Appointment canceled successfully.');
}


    public function delete($appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        $appointment->delete();

        return redirect()->back()->with('success', 'Appointment deleted successfully!');
    }
}
