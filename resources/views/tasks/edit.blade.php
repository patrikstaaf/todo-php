{{-- <x-layout title="Edit Task {{ $task->title }}"> --}}
    <x-layout title="Edit Task: name">
        <div class="flex justify-center mx-auto w-full md:w-3/5 p-6">
            <div class="flex flex-col w-full">
            {{-- <h1 class="w-full mb-4">Edit task: {{ $task->title }}</h1> --}}
            <form action="{{ route('lists.tasks.update', [$category, $task]) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="title" class="sr-only">Task Title</label>
                    <input type="title" name="title" id="title" value="{{ $task->title }}" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" required autofocus>

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="sr-only">Task Description (optional)</label>
                    <textarea type="description" name="description" id="description" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" autofocus>{{ $task->description }}</textarea>

                    @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="deadline" class="sr-only"></label>
                    <input type="date" name="deadline" id="deadline" value="{{ $task->deadline }}" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" autofocus>

                    @error('deadline')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <label for="completed">Done
                <input type="checkbox" class="form-check-input mx-2"  name="completed" value="{{old('completed')}}" @if(old('completed', $task->completed)) checked @endif>

                </label>
                <div>
                    <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Add</button>
                    {{-- <a href="{{ route('lists.show', [$list->id]) }}" class="bg-red-900 text-white px-4 py-3 rounded font-medium w-full">Back</a> --}}
                </div>
            </form>
        </div>
         </div>
    </x-layout>
