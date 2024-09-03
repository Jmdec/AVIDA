<?php

namespace App\Http\Controllers;

use App\Models\Appointment;

class AdminController extends Controller
{
    public function appointments()
    {
        $appointments = Appointment::all();
        return view('admin.appointments', ['appointments' => $appointments]);
    }
}

