{{-- <x-layout title="Create Task for list: {{$category->title}}"> --}}
<x-layout title="Create Task for list: {{$category->title}}">
    <div class="flex justify-center mx-auto w-full md:w-3/5 p-6">
        <div class="flex flex-col w-full">
        <h1 class="w-full mb-4">Create new task for: {{$category->title}}</h1>
        <form action="{{ route('lists.tasks.store', $category) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title">Task Title</label>
                <input type="title" name="title" id="title" placeholder="Task Title" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" required autofocus>

                @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description">Task Description (optional)</label>
                <textarea type="description" name="description" id="description" placeholder="Description (optional)" rows="2" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" autofocus></textarea>

                @error('description')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="deadline">Deadline (optional)</label>
                <input type="date" name="deadline" id="deadline" placeholder="Deadline" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" autofocus>

                @error('deadline')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Add</button>
            </div>
        </form>
    </div>
     </div>
</x-layout>
