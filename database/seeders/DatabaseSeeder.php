<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Bimbingan;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat Bimbingan
        $bimbingan1 = Bimbingan::create([
            'mahasiswa' => 'jungwon',
            'nim' => 9,
            'status' => 'belum mulai',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);

        $bimbingan2 = Bimbingan::create([
            'mahasiswa' => 'Heeseung',
            'nim' => 15,
            'status' => 'proses',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);
        $bimbingan2 = Bimbingan::create([
            'mahasiswa' => 'Sunghoon',
            'nim' => 8,
            'status' => 'proses',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);
        $bimbingan2 = Bimbingan::create([
            'mahasiswa' => 'Jay',
            'nim' => 20,
            'status' => 'proses',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);
        $bimbingan2 = Bimbingan::create([
            'mahasiswa' => 'Jake',
            'nim' => 15,
            'status' => 'proses',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);
        $bimbingan2 = Bimbingan::create([
            'mahasiswa' => 'Sunoo',
            'nim' => 24,
            'status' => 'proses',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);
        $bimbingan2 = Bimbingan::create([
            'mahasiswa' => 'Niki',
            'nim' => 9,
            'status' => 'proses',
            'tanggal_bimbingan' => Carbon::now(),
            'aktif' => 1
        ]);

        // Membuat Mahasiswa
        Mahasiswa::create([
            'bimbingan_id' => $bimbingan1->id,
            'jumlah_mahasiswa' => 1,
            'tanggal_bimbingan' => Carbon::now()
        ]);

        Mahasiswa::create([
            'bimbingan_id' => $bimbingan2->id,
            'jumlah_mahasiswa' => 1,
            'tanggal_bimbingan' => Carbon::now()
        ]);
    }
}