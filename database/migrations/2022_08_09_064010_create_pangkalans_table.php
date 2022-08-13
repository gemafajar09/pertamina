<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePangkalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pangkalans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_type');
            $table->string('id_registrasi');
            $table->string('nama_pangkalan');
            $table->string('telpon_kantor');
            $table->string('nama_pemilik');
            $table->string('nik');
            $table->string('no_hp');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('pangkalans');
    }
}
