<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableIdentitasSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_identitas_siswa', function (Blueprint $table) {
            $table->increments('id')->nullable()->change();
            $table->string('nama', 191)->nullable()->change();
            $table->string('jenis_kelamin', 20)->nullable()->change();
            $table->string('kelas', 100)->nullable()->change();
            $table->string('nomor_hp', 20)->nullable()->change();
            $table->string('instagram', 50)->nullable()->change();
            $table->string('facebook', 50)->nullable()->change();
            $table->string('twitter', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_identitas_siswa', function (Blueprint $table) {
            //
        });
    }
}
