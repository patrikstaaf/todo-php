<x-layout title="Tasks">
{{-- <div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        All tasks

        Here you will find all your tasks.
    </div>
</div> --}}
{{-- @foreach ($tasks as $task)
    <h2>{{ $task->title }}</h2>
    <li>{{ $task->description }}</li>
    <li>{{ $task->deadline }}</li>
@endforeach --}}
<div class="flex justify-between mx-auto w-full md:w-3/5 p-6">
<h1>Task Title</h1>
<p>Task Description</p>
<p>Task Deadline:</p>
</div>
<div class="flex justify-center w-full mx-auto ">
<p>You first need to create a list and then add it's tasks. Go to <a href="/lists"><u>lists.</u></a></p>
</div>
</x-layout>
