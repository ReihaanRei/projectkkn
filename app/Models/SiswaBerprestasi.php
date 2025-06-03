<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaBerprestasi extends Model
{
    protected $table = 'siswa_berprestasi';

    protected $fillable = [
        'user_id',
        'nama',
        'nis',
        'jenis_kelamin',
        'jurusan',
        'tahun',
        'prestasi',
        'pencapaian',
        'tingkat',
        'deskripsi',
        'sertifikat',
        'foto',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}