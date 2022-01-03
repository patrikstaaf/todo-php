{{-- <x-layout title="Create Task for list: {{$category->title}}"> --}}
    <x-layout title="Edit Task: name">
        <div class="flex justify-center mx-auto w-full md:w-3/5 p-6">
            <div class="flex flex-col w-full">
            <h1 class="w-full mb-4">Edit task: name</h1>
            <<form action="/" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="sr-only">Task Title</label>
                    <input type="title" name="title" id="title" placeholder="Task Title" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" required autofocus>
        
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="sr-only">Task Description (optional)</label>
                    <textarea type="description" name="description" id="description" placeholder="Description (optional)" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" autofocus>Description</textarea>
        
                    @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="deadline" class="sr-only">Deadline (optional)</label>
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
    