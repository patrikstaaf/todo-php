<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@isset($title){{ $title }} -@endisset To Do App</title>
</head>
<body class="bg-white antialiased font-sans max-w-4xl mx-auto">

    {{-- <nav class="p-6 bg-white border-b border-gray-200 flex justify-between max-w-full mb-6"> --}}
    <nav class="p-6 flex justify-between max-w-full mb-6">
        <ul class="flex items-center">
            @guest
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            @endguest
            @auth
            <li>
                <a href="{{ route('my-day') }}" class="p-3">My Day</a>
            </li>
            <li>
                <a href="{{ route('lists.index') }}" class="p-3">Lists</a>
            </li>
            <li>
                <a href="{{ route('all-task') }}" class="p-3">All tasks</a>
                {{-- <a href="{{ route('lists.tasks.index', $list) }}" class="p-3">All tasks</a> --}}
            </li>
        </ul>
        <ul class="flex items-center">
            <li>
                <div class="flex items-center">
                    {{-- <img class="h-8 w-8 rounded-full inline-block" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
                    {{-- <img class="h-8 w-8 rounded-full inline-block" src="{{ auth()->user->avatar_path }}"> --}}
                    {{-- <img class="h-8 w-8 rounded-full inline-block" src="{{ url(auth()->user()->avatar ?? '/uploads/user-avatar.webp') }}"> --}}
                    <img class="h-8 w-8 rounded-full inline-block" src="{{ auth()->user()->avatar ?? '/uploads/user-avatar.webp' }}">
                    {{-- <img class="h-8 w-8 rounded-full inline-block" src="{{ auth()->user()->avatar }}"> --}}
                <a href="{{ route('profile.edit') }}" class="p-3 inline-block">{{ auth()->user()->email }}</a>
            </div>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="p-3 inline">
                    @csrf
                    <button type="submit">Log out</button>
                </form>
            </li>
            @endauth
            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            @endguest
        </ul>
    </nav>
    {{ $slot }}
   <x-flash />
</body>
</html>
