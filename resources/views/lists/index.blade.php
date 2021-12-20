@extends('layouts.app')

@section('content')
<div class="w-8/12 flex justify-between mx-auto">
    <button class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded mb-6">Create new list</button>
    <button class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded mb-6">Delete all lists</button>
</div>

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        Lists

        Here are your lists with it's belonging tasks.
    </div>
</div>
@endsection
