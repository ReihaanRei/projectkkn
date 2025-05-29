<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif  
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex flex-col items-center justify-start min-h-screen ">
    <header class="w-full bg-blue-700 text-white shadow-md">
        <div class="max-w-full px-8 py-4 flex justify-between items-center">
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

            <!-- Kanan: Tombol Login/Register -->
            @if (Route::has('login'))
                <div class="flex items-center gap-2">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-outline btn-accent text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-sm btn-error text-white">Login As Admin</a>
                    @endauth
                </div>
            @endif
        </div>
    </header>

    <x-table-prestasi-home :siswas="$siswas" />

    @if (Route::has('login'))
        <div class="h-12 hidden lg:block"></div>
    @endif
</body>

</html>
