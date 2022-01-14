<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use Auth;
use Illuminate\Validation\Rule;

class CategoryTaskController extends Controller
{
    public function create(Category $list)
    {
        return view('tasks.create', ['category' => $list]);
    }

    public function store(Request $request, Category $list)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
        ]);

        $list->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('lists.show', [$list->id])->with('success', 'Your task has been added.');
    }

    public function edit(Category $list, Task $task)
    {
        return view('tasks.edit', [
            'category' => $list,
            'categories' => Auth::user()->lists,
            'task' => $task,
        ]);
    }

    public function update(Request $request, Category $list, Task $task)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'nullable|string|max:255',
            'deadline' => 'nullable|date',
            'completed' => 'nullable|boolean',
            'category_id' => [
                'required', 'string',
                Rule::exists('categories', 'id')->where(function ($query) {
                    return $query->where('user_id', '=', Auth::user()->id);
                })
            ]
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'completed' => $request->has('completed'),
            'category_id' => $request->category_id
        ]);

        return redirect()->route('lists.show', [$list->id])->with('success', 'Your task has been updated.');
    }

    public function destroy(Category $list, Task $task)
    {
        $this->authorize('delete', $task);

        $task->delete();

        return redirect()->route('lists.show', [$list->id])->with('success', 'Task Deleted.');
    }
}
