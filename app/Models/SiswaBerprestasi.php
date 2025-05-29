<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaBerprestasi extends Model
{
    use HasFactory;

    protected $table = 'siswa_berprestasi';

    protected $fillable = [
        'user_id',
        'nama',
        'kelas',
        'tahun',
        'prestasi',
        'tingkat',
        'sertifikat',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}