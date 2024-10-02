<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa');           // Tipe data string
            $table->integer('nim');                // Tipe data number
            $table->enum('status', ['belum mulai', 'proses', 'selesai']); // Tipe data enum
            $table->date('tanggal_bimbingan');     // Tipe data date
            $table->boolean('aktif');              // Tipe data boolean
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bimbingan');
    }
}