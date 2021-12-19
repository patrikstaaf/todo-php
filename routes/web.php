<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/lists', function () {
    return view('lists.index');
});

// Route::get('/', function () {
//     return view('lists.index');
// });


Route::get('/my-day', [DashboardController::class, 'index'])->name('my-day');


Route::get('/register', [RegisterController::class, 'index'])->name('register');
// Will inherit name from above
Route::post('/register', [RegisterController::class, 'store']);
