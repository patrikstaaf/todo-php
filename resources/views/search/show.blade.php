<x-layout title="Search">
    <div class="flex justify-center mx-auto w-full">
        <div class="flex flex-col w-full">
            <h1 class="w-full mb-4 text-center font-semibold">Search</h1>
            <div class="flex items-center justify-center ">
                <form action="/search" method="GET" class="flex">
                    <input type="text" name="q" class="form-input border-2 p-4 dark:border-0 dark:bg-gray-800 dark:hover:bg-gray-700" placeholder="Search...">
                    <button class="bg-slate-800 hover:bg-slate-700 text-white px-4 py-3 font-medium dark:bg-slate-200 dark:text-slate-900 dark:hover:bg-slate-50">Search</button>
                </form>
            </div>
            <div class="flex flex-col w-full mt-5">
                @forelse ($tasks as $task)
                <div class="flex justify-between max-w-full my-3">
                    <div class="flex items-center overflow-auto">
                        <div class="flex flex-col">
                            <p class="font-semibold">{{$task->title}}</p>
                            <p class="text-sm italic">{{$task->description}}</p>
                            @if ($task->deadline != null)
                                <p class="text-sm italic">Due: {{$task->deadline}}</p>
                            @endif
                            @if ($task->completed > 0)
                                <span class="text-sm italic">Completed: <span class="text-green-700 text-sm italic">Yes</span></span>
                            @else
                                <span class="text-sm italic">Completed: <span class="text-red-700 text-sm italic">No</span></span>
                            @endif
                        </div>
                    </div>
                    <div class="flex items-center">
                        <a href="{{ route('lists.tasks.edit', [$task->category, $task]) }}" class="p-2 border-transparent border-b-2 hover:border-b-2 hover:border-slate-200">Edit</a>
                        @can('delete', Auth::user(), $task, $task->category)
                            <form action="{{ route('lists.tasks.destroy', [$task->category, $task]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" onclick="return confirm('Confirm, do you want to delete this task?')" class="pl-3 pr-0 py-2 border-transparent border-b-2 hover:border-b-2 hover:border-slate-200">Delete</button>
                        </form>
                        @endcan
                    </div>
                </div>
                <hr class="mt-0 mb-6 w-24">
                @empty
                <div class="mx-auto">
                    @if(request()->has('q') && request()->filled('q'))
                        <p>No results found...</p>
                    @else
                        <p>Please enter a search term...</p>
                    @endif
                </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>
