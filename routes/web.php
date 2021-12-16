<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/lists', function () {
    return view('lists.index');
});


// User routes
Route::get('register', [RegisterController::class, 'create']);
