<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbinganTable extends Migration
{
    public function up()
    {
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa'); // Pastikan kolom ini ada
            $table->integer('nim');
            $table->enum('status', ['belum mulai', 'proses', 'selesai']);
            $table->date('tanggal_bimbingan');
            $table->boolean('aktif');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bimbingan'); // Gunakan huruf kecil
    }
}