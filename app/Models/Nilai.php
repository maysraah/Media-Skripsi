<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_user_id',
        'jenis_tes',
        'nilai',
        'waktu_pengerjaan',
        'percobaan',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_user_id');
    }

    // Relasi ke Siswa berdasarkan user_id (jika perlu)
    public function siswaUser()
    {
        return $this->belongsTo(Siswa::class, 'siswa_user_id', 'user_id');
    }
}
