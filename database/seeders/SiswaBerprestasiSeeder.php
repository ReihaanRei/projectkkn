<?php

namespace Database\Seeders;

use App\Models\SiswaBerprestasi;
use App\Models\User;
use Illuminate\Database\Seeder;

class SiswaBerprestasiSeeder extends Seeder
{
    public function run(): void
    {
        $jurusanList = [
            'T. KIMIA INDUSTRI',
            'KIMIA ANALISIS',
            'T. INSTALASI TENAGA LISTRIK',
            'T. FABRIKASI LOGAM DAN MANUFAKTUR',
            'T. ELEKTRONIKA KOMUNIKASI',
            'KONTRUKSI GEDUNG, SANITASI DAN PERAWATAN',
            'T. SEPEDA MOTOR',
            'T. KENDARAAN RINGAN',
            'T. ALAT BERAT'
        ];

        $tingkatList = [
            'Sekolah',
            'Kecamatan',
            'Kabupaten/Kota',
            'Provinsi',
            'Nasional',
            'Internasional'
        ];

        $prestasiContoh = [
            'Juara 1 Lomba Robotik',
            'Juara 2 Desain Poster',
            'Juara Harapan 1 LKS Elektronika',
            'Finalis Kompetisi Sains Nasional',
            'Pemenang Inovasi Teknologi',
            'Juara 3 Lomba Cerdas Cermat',
            'Delegasi Seminar Internasional',
            'Lolos Seleksi Olimpiade Matematika',
            'Juara Favorit Desain Website',
            'Juara Umum Lomba Antar SMK'
        ];

        $userId = User::first()->id;

        for ($i = 0; $i < 50; $i++) {
            SiswaBerprestasi::create([
                'user_id'       => $userId,
                'nama'          => fake()->name(),
                'nis'           => fake()->unique()->numerify('#######'),
                'jenis_kelamin' => fake()->randomElement(['L', 'P']),
                'jurusan'       => $jurusanList[array_rand($jurusanList)],
                'tahun'         => fake()->numberBetween(2018, 2025),
                'prestasi'      => $prestasiContoh[array_rand($prestasiContoh)],
                'pencapaian'    => fake()->randomElement(['Juara 1', 'Juara 2', 'Finalis', 'Harapan 1']),
                'tingkat'       => $tingkatList[array_rand($tingkatList)],
                'deskripsi'     => fake()->sentence(10),
                'sertifikat'    => null,
                'foto'          => null,
            ]);
        }
    }
}
