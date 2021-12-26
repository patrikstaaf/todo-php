<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Welcome back.');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function destroy(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate(); // invalidate user session

        $request->session()->regenerateToken(); // regenerate for security purposes

        return redirect('/')->with('success', 'Goodbye.');
    }
}
