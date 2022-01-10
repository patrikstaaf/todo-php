<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __invoke()
    {
        // return view('my-day', [
        //     'tasks' => Task::whereDate('deadline', '=', today())->get(),
        // ]);

        return view('my-day', [
            'tasks' => Task::whereNotNull('deadline')->with('category', 'user')->whereDate('deadline', '=', today())->get(),

            // ('deadline', '=', today())->get(),
        ]);
    }
}
