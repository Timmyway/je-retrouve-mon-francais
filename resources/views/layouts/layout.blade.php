<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @section('cssPage')
            @vite(['resources/scss/app.scss'])
        @show
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav class="px-2 py-4 bg-gray-200 shadow-lg">
            <ul class="flex items-center gap-4">
                <a href="{{ route('pages.home')}}">
                    <li class="text-lg px-4 bg-yellow-400 py-2 rounded-md">Welcome</li>
                </a>
                <a href="{{ route('pages.quotes') }}">
                    <li class="text-lg px-4 bg-yellow-400 py-2 rounded-md">Quotes</li>
                </a>
            </ul>
        </nav>
        <div id="app">
            @yield('content')
        </div>

        @section('vueBundle')
            @vite(['resources/js/appBundle.js'])
        @show
    </body>
</html>
