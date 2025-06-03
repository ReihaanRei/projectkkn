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

<body class="bg-gray-100 dark:bg-[#0a0a0a] text-[#1b1b18] flex flex-col items-center justify-start min-h-screen ">
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
    <div class="my-16">

        <form method="GET" action="{{ route('home') }}" class="mb-6 w-full max-w-5xl px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Input pencarian -->
                <input type="text" name="search" placeholder="Cari nama siswa"
                    value="{{ request('search') }}" class="input input-bordered w-full" />

                <!-- Select filter tingkat -->
                <select name="filter_tingkat" class="select select-bordered w-full">
                    <option value="">Semua Tingkat</option>
                    @foreach (['Sekolah', 'Kecamatan', 'Kabupaten/Kota', 'Provinsi', 'Nasional', 'Internasional'] as $tingkat)
                        <option value="{{ $tingkat }}" {{ request('tingkat') == $tingkat ? 'selected' : '' }}>
                            {{ $tingkat }}
                        </option>
                    @endforeach
                </select>

                <!-- Tombol cari -->
                <button type="submit" class="btn btn-primary w-full">Cari</button>
            </div>
        </form>
        <x-table-prestasi-home :siswas="$siswas" />
    </div>

    @if (Route::has('login'))
        <div class="h-12 hidden lg:block"></div>
    @endif
</body>

</html>
