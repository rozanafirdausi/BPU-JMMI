<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadwalMengajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_mengajar', function (Blueprint $table) {
            $table->increments('id_jadwal_mengajar');
            $table->integer('id_desa_binaan_jadwal')->unsigned();
            $table->integer('id_admin_jadwal')->unsigned();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat');
            $table->timestamps();
        });

        Schema::table('jadwal_mengajar', function (Blueprint $table) {
            $table->foreign('id_admin_jadwal')
            ->references('id_admin')
            ->on('admin')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_desa_binaan_jadwal')
            ->references('id_desa_binaan')
            ->on('desa_binaan')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jadwal_mengajar');
    }
}
