<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_apps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('telpon');
            $table->integer('id_provinsi')->nullable();
            $table->integer('id_kabupaten')->nullable();
            $table->string('mor')->nullable();
            $table->string('sold_to')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('level',['SUPER ADMIN','ADMIN APROVAL','AGEN']);
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
        Schema::dropIfExists('userapps');
    }
}
