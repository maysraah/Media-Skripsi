<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    // protected $table = 'siswa';

    protected $fillable = ['user_id', 'kelas'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Nilai (one-to-many)
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'siswa_user_id', 'user_id');
    }
}
