<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Concept;
use App\Models\Amenity;
use App\Models\Sale;
use App\Models\Lease;
use App\Models\Award;
use App\Models\Upload;
use App\Models\User;
class HomeController extends Controller
{

    public function home()
    {
        $uploads= Upload::all();
        $sales = Sale::all();
        $saleNames = $sales->pluck('name')->unique();

        $leases = Lease::all(); // Corrected variable name
        $leaseNames = $leases->pluck('name')->unique();

        $names = $saleNames->merge($leaseNames)->unique(); // Merge and make unique

        return view('home', compact('names','uploads'));
    }

    public function forsaleland()
    {
        $sales = Sale::all();
        return view('forsale.land', compact('sales'));
    }
    public function forleaseland()
    {
        $leases = Lease::all();
        return view('forlease.land', compact('leases'));
    }
    public function appointment()
    {
        return view('reserve');
    }
    public function awardindex()
    {
        $awards = Award::all();
        return view('award.index', compact('awards'));
    }
    public function destroy(Award $award)
{
    $award->delete();
    return redirect()->back()->with('success', 'Award deleted successfully!');
}

    public function award()
    {
        $awards = Award::all();
        return view('award.award', compact('awards'));
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|max:20480',

            'title' => 'required|string|max:255',

        ]);

        // Handle file upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/award'), $imageName);

        // Create a new Sale instance
        $award = new Award();
        $award->image = $imageName;
        $award->title = $request->title;

        $award->save();

        // Redirect back or to a specific route
        return redirect()->back()->with('success', 'Award created successfully!');
    }

    public function forsale()
    {
        $sales = Sale::all();
        return view('sales.forsale',  compact('sales'));
    }
    public function viewsale($id)
    {
        $sale = Sale::findOrFail($id);
        return view('sales.id', compact('sale'));
    }
    public function viewlease($id)
    {
        $leases = Lease::findOrFail($id);
        return view('leasing.id', compact('leases'));
    }

    public function forlease()
    {
        $leases = Lease::all();
        return view('leasing.leasing', compact('leases'));
    }
    public function book()
    {
        $amenities = Amenity::all();
        $concepts = Concept::all();
        return view('properties.book', compact('concepts','amenities'));
    }
    public function properties()
    {
        $properties = Properties::all();
        return view('properties', compact('properties'));
    }
    public function dashboard()
    {
        return view('admin/index');
    }
    public function index()
{

    if (!auth()->check()) {
        return redirect()->route('login')->with('message', 'Please log in to access this page.');
    }

    return view('admin.index');
}

    public function contactform()
    {
        return view('contact/home');
    }
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        // Validate request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only('email', 'password'))) {
            // Authentication successful, redirect to dashboard or any other page
            return redirect()->route('home');
        } else {
            // Authentication failed, redirect back with error message
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
    public function register(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to login page with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

}

