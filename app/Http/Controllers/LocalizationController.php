<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class LocalizationController extends Controller
{
    public function index(Request $request, $locale)
    {
        // Set the application locale
        App::setLocale($locale);
Session::put("locale",$locale);
        // Return the translated message
        return redirect()->back();
    }
}
