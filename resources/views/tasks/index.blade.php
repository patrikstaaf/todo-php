{{-- <x-layout title="All Tasks">
   <div class="flex justify-center mx-auto w-full p-6">
    <div class="flex flex-col w-full">
    <h1 class="w-full mb-6 font-bold text-center">All tasks</h1>
    @forelse ($category->tasks as $task)
    <div class="flex justify-between max-w-full my-3">

        <div class="flex items-center">
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
        <div class="flex items-center">

<a href="{{ route('lists.tasks.edit', [$category, $task]) }}">Edit</a>
    @can('delete', $task)
    <form action="{{ route('lists.tasks.destroy', [$category, $task]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Confirm, do you want to delete this task?')" class="p-3">Delete</button>
    </form>
    @endcan
    </div>

    </div>
    <hr>
@empty
<div class="mx-auto">
    <p>You first need to create a list and then add its tasks. Go to <a href="/lists"><u>lists.</u></a></p>
</div>

@endforelse
</div>
 --}}

