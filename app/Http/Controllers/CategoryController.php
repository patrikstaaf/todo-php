<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryShare;
use App\Models\Task;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
    {
        if (request()->has('lists') && request()->input('lists') === "shared") {
            return view('lists.index', [
                'shared' => auth()->user()->sharedLists
            ]);
        } else {
            return view('lists.index', [
                'category' => Category::latest()->where('user_id', auth()->id())->get(),
            ]);
        }
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
        $this->authorize('show', $list);

        return view('lists.show', [
            'category' => $list,
            'task' => $tasks,
        ]);
    }

    public function edit(Category $list)
    {
        return view('lists.edit', [
            'category' => $list,
            'shares' => CategoryShare::where('category_id', $list->id)->get()
        ]);
    }

    public function update(Request $request, Category $list)
    {
        if (!$this->authorize('update', $list)->denied()) {
            abort(401);
        }

        $attributes = $request->validate(
            [
                'title' => 'required|string',
                'share' => 'nullable|email|string|exists:users,email'
            ],
            [
                'exists' => "This user does not exist"
            ]
        );

        if ($request->has('share')) {
            $share = new CategoryShare();
            $share->user_id = User::where('email', $attributes['share'])->first()->id;
            $share->category_id = $list->id;
            $share->save();
        }

        $list->update([
            'title' => $attributes['title']
        ]);

        return redirect('lists')->with('success', 'List title updated.');
    }

    public function destroy(Category $list)
    {
        $this->authorize('delete', $list);

        $list->delete();

        return back()->with('success', 'List deleted.');
    }
}
