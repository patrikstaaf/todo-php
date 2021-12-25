<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    // public function update()
    // {
    //     return redirect('/')->with('success', 'Your profile info has been updated.');
    // // }
}
