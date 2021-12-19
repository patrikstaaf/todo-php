<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        // just to check that the user is signed in
        return view('my-day');
    }
}
