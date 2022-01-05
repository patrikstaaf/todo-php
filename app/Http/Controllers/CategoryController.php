<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Task;

class CategoryController extends Controller
{
    public function index()
    {
        return view('lists.index', [
            'category' => Category::latest()->where('user_id', auth()->id())->paginate(10),
        ]);
    }

    public function create()
    {
        return view('lists.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
        ]);

        $request->user()->lists()->create([
            'title' => $request->title,
        ]);

        return redirect('lists')->with('success', 'Your list has been created.');
    }

    public function show(Category $list, Task $tasks)
    {
        // $tasks = Task::where('user_id', auth()->user()->id)->get();
        // $list = Category::where('user_id', auth()->user()->id)->get();

        // return view('lists.show', compact('tasks, list'));

        return view('lists.show', [
            'category' => $list,
            'task' => $tasks,
        ]);

        // user_id auth()->user()
    }

    public function edit(Category $list)
    {
        return view('lists.edit', ['category' => $list]);
    }

    public function update(Request $request, Category $list)
    {
        $updateListName = $request->validate([
            'title' => 'required|string',
        ]);

        $list->update($updateListName);

        return redirect('lists')->with('success', 'List title updated.');
    }

    public function destroy(Category $list)
    {
        $this->authorize('delete', $list);

        $list->delete();

        return back()->with('success', 'List deleted.');
    }
}
