<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to authenticate and log in the user based on the provided credentials

        if (auth()->attempt($attributes)) {
            session()->regenerate(); // prevent session fixation?

            return redirect('/')->with('success', 'Welcome back.');
        }

        // auth fail
        return back()->withInput()->withErrors(['email' => 'Invalid login details.']);
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
    //         return back()->withErrors('status', 'Invalid login details');
    //     }

    //     return redirect()->route('my-day')->with('success', 'Welcome back');
    // }
}
