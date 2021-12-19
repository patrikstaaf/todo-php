<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>To-do app</title>
</head>
<body class="h-full bg-gray-100">

    <nav class="p-6 bg-gray-200 flex justify-between max-w-full mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('my-day') }}" class="p-3">My Day</a>
            </li>
            <li>
                <a href="" class="p-3">Lists</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">Patrik Staaf</a>
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
    @yield('content')
</body>
</html>

{{-- <x-app-layout title="Layouts">
Layouts
</x-app-layout> --}}
