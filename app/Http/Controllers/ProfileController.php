<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit(User $user)
    {
        return view('profile.edit', ['user' => $user]);
    }



    // public function update(Request $request)
    // {
    //     $attributes = $request->validate([
    //         'email' => 'required|email|max:255|unique:users,email',
    //         'password' => 'required|min:7|max:255|confirmed',
    //         'avatar' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:1024', // 1mb
    //     ]);


    //

    //     return redirect('/profile')->with('success', 'Your profile info has been updated.');
    // }
}
