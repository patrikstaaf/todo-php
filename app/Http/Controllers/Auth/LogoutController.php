<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke()
    {
        auth()->logout();

        // return redirect('/')->route('/')->with('succes', 'Goodbye');
        return redirect('/')->with('success', 'Goodbye.');
    }
}
