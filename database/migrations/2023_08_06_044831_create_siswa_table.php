<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->unsignedBigInteger('id_provinsi');
            $table->foreign('id_provinsi')->references('id')->on('provinsi');
            $table->unsignedBigInteger('id_kabupaten');
            $table->foreign('id_kabupaten')->references('id')->on('kabupaten');
            $table->integer('kode_pos');
            $table->string('alamat_lengkap');
            $table->string('kewarganegaraan');
            $table->string('pendidikan_terakhir');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('nama_ibu');
            $table->string('no_telp_ortu');
            $table->string('ktp');
            $table->string('kartu_keluarga');
            $table->string('ijazah_pendidikan');
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
        Schema::dropIfExists('siswa');
    }
}
