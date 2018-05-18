<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengurusAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus_absensi', function (Blueprint $table) {
            $table->increments('id_pengurus_absensi');
            $table->integer('id_pengurus')->unsigned();
            $table->integer('id_jadwal_absensi')->unsigned();
            $table->timestamps();
        });

        Schema::table('pengurus_absensi', function (Blueprint $table){
            $table->foreign('id_pengurus')
            ->references('id_pengurus')
            ->on('pengurus_jmmi')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_jadwal_absensi')
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
        Schema::drop('pengurus_absensi');
    }
}
