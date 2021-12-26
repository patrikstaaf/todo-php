<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;


Route::view('/', 'home'); //invokable not needed as its only returning a view?

// Register
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// Login & Logout
Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

// Logout
// Route::post('/logout', LogoutController::class)->name('logout')->middleware('auth');

// All routes except register, login and home (if I even will have a home)
// Route::group(['middleware' => 'auth'], function () {

// });

// Update profile info
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
// Route::put('/profile', [ProfileController::class, 'update'])->name('profile')->middleware('auth');



// Dashboard
Route::get('/my-day', [DashboardController::class, 'index'])->name('my-day')->middleware('auth');
// ->middleware('auth');


// Lists make a resource controller instead
Route::get('/lists', [CategoryController::class, 'index'])->name('lists')->middleware('auth');

// Tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks')->middleware('auth');
