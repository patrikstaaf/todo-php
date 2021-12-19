<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed', // match the form password confirmation field
        ]);

        // store the user
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        // sign in the user

        auth()->attempt($request->only('email', 'password')); // Cannot use this above due to pw hashing

        // redirect
        return redirect()->route('my-day');
    }
}
