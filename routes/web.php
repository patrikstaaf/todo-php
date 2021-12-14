<?php

use Illuminate\Support\Facades\Route;

Route::get('/lists', function () {
    return view('lists.index');
});
