<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;

class CategoryTaskController extends Controller
{

    // public function index()
    // {
    //     return view('tasks.index');

    // }

    public function create(Category $list)
    {
        return view('tasks.create', ['category' => $list]);
        // want to fetch category->title data
    }

    public function store(Request $request, Category $list)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
            'deadline' => 'nullable|date',
        ]);

        $list->tasks()->user()->create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);

        return redirect('lists.show', [$list->list_id, $list])->with('success', 'Your task has been added.');
    }

    // public function edit(Category $category, Task $task)
    // {
    //     if($category->task_id != $task->id) {
    //         abort(404);
    //     }
    // }

    // // public function update()
    // // {
    // // }

    // public function destroy(Category $category)
    // {
    //     $category->delete();

    //     return back()->with('success', 'List Deleted');
    // }
}
