<x-layout title="Create List">
    <div class="flex justify-center mx-auto w-full md:w-3/5 p-6">
        <div class="flex flex-col w-full">
        <h1 class="w-full mb-4">Create new list</h1>
        <form action="{{ route('lists.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="title" name="title" id="title" placeholder="List Title" class="bg-gray-100 border-2 w-full p-4 rounded lg @error('title') border-red-300  @enderror" required autofocus>

                @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-black text-white px-4 py-3 rounded font-medium w-full">Save</button>
            </div>
        </form>
    </div>
     </div>
</x-layout>
