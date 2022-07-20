<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->string('noreg');
            $table->string('kode_peserta');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('nik');
            $table->string('nama_ibu');
            $table->string('no_hp_ibu');
            $table->string('program_studi');
            $table->string('waktu_kuliah');
            $table->string('sistem_pembayaran');
            $table->string('blazer');
            $table->string('lokasi_belajar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
