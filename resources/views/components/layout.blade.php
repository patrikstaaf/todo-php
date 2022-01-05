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

    <nav class="p-6 bg-white border-b border-gray-200 flex justify-between max-w-full mb-6">
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
                <a href="/" class="p-3">All tasks</a>
                {{-- <a href="{{ route('lists.tasks.index', $list) }}" class="p-3">All tasks</a> --}}
            </li>
        </ul>
        <ul class="flex items-center">
            <li>

                <a href="{{ route('profile.edit') }}" class="p-3">{{ auth()->user()->email }}</a>

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
