<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // Pastikan nama tabel dalam huruf kecil
    protected $fillable = [
        'bimbingan_id',
        'jumlah_mahasiswa',
        'tanggal_bimbingan',
    ];

    public function bimbingan()
    {
        return $this->belongsTo(Bimbingan::class, 'bimbingan_id');
    }
}