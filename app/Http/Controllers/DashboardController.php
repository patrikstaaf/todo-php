<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('my-day', [
            'tasks' => Task::whereDate('deadline', '=', today())->get() // make dynamic timezone for user
        ]);
    }
}
