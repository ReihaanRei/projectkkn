<?php

namespace Database\Seeders;

use App\Models\SiswaBerprestasi;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiswaBerprestasiSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $data = [
            [
                'user_id' => $user->id,
                'nama' => 'Budi Hartono',
                'kelas' => 'XI IPS 2',
                'tahun' => 2024,
                'prestasi' => 'Juara 2 Lomba Cerdas Cermat',
                'tingkat' => 'Provinsi',
                'sertifikat' => null,
                'foto' => null,
            ],
            [
                'user_id' => $user->id,
                'nama' => 'Siti Aminah',
                'kelas' => 'X IPA 1',
                'tahun' => 2023,
                'prestasi' => 'Juara 1 Lomba Matematika',
                'tingkat' => 'Kabupaten',
                'sertifikat' => null,
                'foto' => null,
            ],
        ];

        foreach ($data as $siswa) {
            $user->siswaBerprestasi()->create($siswa);
        }
    }
}