<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDesaBinaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa_binaan', function (Blueprint $table) {
            $table->increments('id_desa_binaan');
            $table->string('nama_desa_binaan',50);
            $table->string('alamat_desa_binaan',100);
            $table->string('contact_person',50);
            $table->string('telp_contact_person',13);
            $table->integer('jumlah_warga');
            $table->timestamps();
        });
    }

    /**
     *
     "+{"
     * @return void
     */
    public function down()
    {
        Schema::drop('desa_binaan');
    }
}
