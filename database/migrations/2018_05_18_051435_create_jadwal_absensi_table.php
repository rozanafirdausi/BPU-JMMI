<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_absensi', function (Blueprint $table) {
            $table->increments('id_jadwal_absensi');
            $table->integer('id_jadwal_mengajar')->unsigned();
            $table->integer('id_absensi')->unsigned();
            $table->timestamps();
        });

        Schema::table('jadwal_absensi', function (Blueprint $table){
            $table->foreign('id_jadwal_mengajar')
            ->references('id_jadwal_mengajar')
            ->on('jadwal_mengajar')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_absensi')
            ->references('id_absensi')
            ->on('absensi')
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
        Schema::drop('jadwal_absensi');
    }
}
