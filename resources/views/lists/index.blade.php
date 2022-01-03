<x-layout title="Lists">
    <div class="flex w-full justify-end px-4">
        <a href="{{ route('lists.create') }}" class="mx-4 p-3 border border-green-500 ">Add list</a>
    </div>
    <div class="flex justify-center mx-auto w-full p-6">
        <div class="flex flex-col w-full">
        <h1 class="w-full mb-6 font-bold text-center">Your lists</h1>
        {{-- @foreach (\App\Models\Category::with('tasks')->get() as $lists) --}}
        @forelse ($category as $list)
            <div class="flex justify-between max-w-full my-3">
                <div class="flex items-center">
        <a href="{{ route('lists.show', $list) }}" class="my-2 text-center">{{ $list->title }}</a>
            </div>
            <div class="flex items-center">
                <a href="{{ route('lists.edit', $list) }}">Edit</a>
        @can('delete', $list)
        <form action="{{ route('lists.destroy', $list) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Confirm, do you want to delete this list and its tasks?')" class="p-3">Delete</button>
        </form>
        @endcan
            </div>
            </div>
            {{-- <hr> --}}
        @empty
        <div class="mx-auto">
            <p>No lists yet.</p>
        </div>
        @endforelse
        {{ $category->links() }}
        </div>
     </div>
</x-layout>
