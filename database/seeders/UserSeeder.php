<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nama_admin' => 'Admin Sekolah',
            'username' => 'admin1',
            'password' => Hash::make('password'),
        ]);
    }
}