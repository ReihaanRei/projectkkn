<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <header class="w-full bg-blue-700 text-white shadow-md">
        <div class="max-w-full px-8 py-6 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12">
                    <img src="{{ asset('images/logo-smkn5.png') }}" alt="Logo SMKN 5"
                        class="h-full w-full object-contain" />
                </div>
                <div class="leading-tight">
                    <h1 class="text-red-500 font-bold text-lg uppercase">Prestasi</h1>
                    <h2 class="text-white font-semibold text-base uppercase">SMKN 5 Surabaya</h2>
                </div>
            </div>
        </div>
    </header>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-48 h-48">
                <img src="{{ asset('images/logo-smkn5.png') }}" alt="Logo SMKN 5"
                    class="h-full w-full object-contain" />
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
