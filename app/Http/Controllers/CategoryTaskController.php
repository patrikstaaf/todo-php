<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;

class CategoryTaskController extends Controller
{

    public function index(Category $list, Task $task)
    {

        $task = $list->tasks()->where('user_id', auth()->user()->id)->get();

        // $task = Task::where('user_id', auth()->user()->id)->get();
        // $list = Category::where('user_id', auth()->user()->id)->get();

        // return view('task.index', compact('task, list'));
        return view('task.index', [
            'task' => $task,
        ]);


        // return view('tasks.index', [
        //     'category' => $list,
        //     'task' => $task,
        // ]);
        // return view('tasks.index', [
        //     'task' => Task::all()->where('user_id', auth()->id())->paginate(20),
        // ]);
    }

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
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'completed' => $request->has('completed'),
        ]);

        return redirect()->route('lists.show', [$list->id])->with('success', 'Your task has been updated.');
    }

    public function destroy(Category $list, Task $task)
    {
        $task->delete();

        return redirect()->route('lists.show', [$list->id])->with('success', 'Task Deleted.');
    }
}
