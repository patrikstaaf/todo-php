<x-layout title="My Day">
    <div class="flex justify-center mx-auto w-full p-6">

        <div class="flex flex-col w-full">
            <h1 class="w-full mb-6 font-bold text-center">Tasks with assigned deadline & due today:</h1>

       @forelse ($tasks as $task)
       <div class="flex max-w-full my-3">
       {{-- <div class="flex items-center max-w-full"> --}}
        <div class="flex flex-col">
        <p>{{$task->title}}</p>
        <p>{{$task->description}}</p>
        <p>Due: {{$task->deadline}}</p>
        @if ($task->completed > 0)
    <span style="color: green;">Completed: Yes</span>
@else
    <span style="color: red;">Completed: No</span>
@endif
        </div>
    </div>
        <hr>
        @empty
            <p class="mx-auto">No tasks due today.</p>
       @endforelse
    </div>
</div>
</x-layout>
