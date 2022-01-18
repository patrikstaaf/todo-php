<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $tasks = [];

        if ($request->has('q') && $request->filled('q')) {
            $query = $request->get('q');
            $tasks = auth()->user()->tasks()->where('title', 'LIKE', "%$query%")->orWhere('description', 'LIKE', "%$query%")->get();
        }

        return view('search.show', ['tasks' => $tasks]);
    }
}
