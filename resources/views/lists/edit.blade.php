<x-layout title="Edit List">
    <div class="flex justify-center mx-auto w-full">
        <div class="flex flex-col w-full">
            <h1 class="w-full mb-4 text-center font-semibold">Edit title</h1>
            <form action="{{ route('lists.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="text-slate-700 dark:text-slate-200">Current Title</label>
                    <input type="title" name="title" id="title" placeholder="{{ old('title') }}" value="{{ $category->title }}" class="form-input mt-1 border-2 rounded p-4 w-full dark:border-0 dark:bg-gray-800 dark:hover:bg-gray-700 @error('title') border-red-300  @enderror" required autofocus>
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="share" class="text-slate-700 dark:text-slate-200">Share list (press enter to add user)</label>
                    <input type="email" name="share" id="share" placeholder="Enter email adress..." value="{{ old('share') ?? "" }}" class="form-input mt-1 border-2 rounded p-4 w-full dark:border-0 dark:bg-gray-800 dark:hover:bg-gray-700 @error('share') border-red-300  @enderror" autofocus>
                    @error('share')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <!-- TODO: Add list of users currently shared to -->
                    <div class="mt-3 flex flex-wrap">
                        <div class="cursor-pointer mb-5 mr-5 px-3 py-3 text-slate-700 dark:text-slate-200 dark:bg-gray-800 dark:hover:bg-gray-700 border-2 rounded dark:border-0">theo01sandell@gmail.com <span class="pl-3">X</span></div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="bg-slate-800 hover:bg-slate-700 text-white px-4 py-3 rounded font-medium w-full dark:bg-slate-200 dark:text-slate-900">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
