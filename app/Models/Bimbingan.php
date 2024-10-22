<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $table = 'bimbingan'; // Pastikan nama tabel dalam huruf kecil
    protected $fillable = [
        'mahasiswa',
        'nim',
        'status',
        'tanggal_bimbingan',
        'aktif',
    ];

    public function mahasiswas() // Menggunakan plural untuk mencerminkan relasi
    {
        return $this->hasMany(Mahasiswa::class, 'bimbingan_id'); // Pastikan relasi benar
    }
}