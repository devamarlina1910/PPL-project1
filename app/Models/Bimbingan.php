<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $table = 'Bimbingan';
    protected $fillable = [
        'mahasiswa',
        'nim',
        'status',
        'tanggal_bimbingan',
        'aktif',
    ];
}