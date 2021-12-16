@extends('layouts.app')

@section('content')
<section class="px-6 py-8 bg-gray-200">
    <main class="max-w-lg mx-auto">
        <form action="/register" method="post">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
            <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" required>
        </div>
        </form>

    </main>

</section>
@endsection
