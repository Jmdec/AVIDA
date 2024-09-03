<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// Assuming Customer model exists

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function forgot()
    {
        return view('auth.reset');
    }
    public function resetPassword(Request $request)
{
    // Validate the request data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    // Update the password directly in the database
    $updated = DB::table('users')
                ->where('email', $request->email)
                ->update([
                    'password' => Hash::make($request->password)
                ]);

    if ($updated) {
        // Password successfully updated
        return redirect()->route('login')->with('success', 'Password has been reset successfully.');
    } else {
        // User not found or update failed
        return back()->with('error', 'Failed to reset password. Passwords do not match.');
    }
}



    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful. You can now log in.');
    }

}
