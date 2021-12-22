<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255|confirmed',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('my-day')->with('success', 'Your account has been created.');
    }

    // ->route('my-day')
    // public function store(Request $request) // Validate inputs, create user, hash pw,
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email|max:255|unique:users,email',
    //         'password' => 'required|min:7|max:255|confirmed',
    //     ]);

    //     User::create([
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     auth()->attempt($request->only('email', 'password'));

    //     // session()->flash('success', 'Your account has been created.');

    //     return redirect()->route('my-day')->with('success', 'Your account has been created.');
    // }
}
