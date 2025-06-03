<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Nama admin -->
        <div>
            <x-input-label for="nama_admin" :value="__('Nama Lengkap')" class="text-base-content" />
            <x-text-input id="nama_admin" class="input input-bordered w-full mt-1 bg-base-100 text-base-content" type="text"
                name="nama_admin" :value="old('nama_admin')" required autofocus autocomplete="nama_admin" />
            <x-input-error :messages="$errors->get('nama_admin')" class="mt-2" />
        </div>

        <!-- Username -->
        <div>
            <x-input-label for="username" :value="__('Username')" class="text-base-content" />
            <x-text-input id="username" class="input input-bordered w-full mt-1 bg-base-100 text-base-content" type="text"
                name="username" :value="old('username')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-base-content" />
            <x-text-input id="password" class="input input-bordered w-full mt-1 bg-base-100 text-base-content"
                type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-base-content" />
            <x-text-input id="password_confirmation"
                class="input input-bordered w-full mt-1 bg-base-100 text-base-content" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Tombol -->
        <div class="flex items-center justify-end">
            <a class="text-sm text-gray-600 hover:underline" href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>

            <x-primary-button class="ms-4 bg-blue-600">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
