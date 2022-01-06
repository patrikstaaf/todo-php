<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class AllTaskController extends Controller
{
    public function __invoke(Request $request)
    {
        $tasks = Task::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();

        return view('all-task', [
            'tasks' => $tasks,
        ]);
    }
}
