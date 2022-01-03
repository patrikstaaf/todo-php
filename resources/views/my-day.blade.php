<x-layout title="My Day">
<div class="flex flex-col justify-center mx-auto w-full md:w-3/5 p-6">
    Tasks with assigned deadline & due today:
       <div class="mt-4">
       @forelse ($tasks as $task)
           <p>{{ $task->title }}</p>
        @empty
            <p>No tasks due today.</p>
       @endforelse
    </div>
</div>
</x-layout>
