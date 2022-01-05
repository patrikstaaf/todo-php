<x-layout title="{{$category->title}}">
    <div class="flex w-full justify-end px-4">
        <a href="{{ route('lists.tasks.create', $category) }}" class="mx-4 p-3 border border-green-500 ">Add task</a>
    </div>
   <div class="flex justify-center mx-auto w-full p-6">
    <div class="flex flex-col w-full">
    <h1 class="w-full mb-6 font-bold text-center">{{$category->title}}</h1>
    {{-- @foreach (\App\Models\Category::with('tasks')->get() as $lists) --}}
    {{-- @forelse ($category as $list) --}}

{{--
        <div class="flex justify-between max-w-full my-3">
            <div class="flex items-center"> --}}


    {{-- <a href="{{ route('lists.show', $list) }}" class="my-2 text-center">{{ $list->title }}</a> --}}
    {{-- <a href="/" class="my-2 text-center">{{ $list->title }}</a> --}}


    {{-- <p class="my-2 text-center">Completed</p>
    <p class="my-2 text-center">Task title</p>
    <p class="my-2 text-center">Task description</p>
    <p class="my-2 text-center">Task deadline</p>
        </div>
        <div class="flex items-center"> --}}


            {{-- <a href="{{ route('lists.edit', $list) }}">Edit</a> --}}

{{--
            <a href="/">Edit</a> --}}



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
{{-- <form action="{{ route('lists.tasks.update', [$category, $task]) }}" method="POST">
    @csrf
    @method('PATCH') --}}
    {{-- <input type="checkbox" class="form-check-input mx-2" name="status" value="{{$task->completed}} "{{$task->completed==1 ? 'checked' : ''}}> --}}
{{-- <button type="submit" class="mx-2 text-center">Done</button>
</form> --}}
<a href="{{ route('lists.tasks.edit', [$category, $task]) }}">Edit</a>

        {{-- <a href="{{ route('lists.edit', $list) }}">Edit</a> --}}
{{-- @can('delete', $list) --}}
{{-- <form action="{{ route('lists.destroy', $list) }}" method="POST"> --}}
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
    <p>No tasks yet.</p>
</div>

@endforelse
</div>

</x-layout>
