<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableIdentitasSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_identitas_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 191);
            $table->string('jenis_kelamin', 20);
            $table->string('kelas', 100);
            $table->string('nomor_hp', 20);
            $table->string('instagram', 50);
            $table->string('facebook', 50);
            $table->string('twitter', 50);
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
        Schema::dropIfExists('tbl_identitas_siswa');
    }
}
