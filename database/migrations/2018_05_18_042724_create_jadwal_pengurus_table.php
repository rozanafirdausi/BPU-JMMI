<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPengurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pengurus', function (Blueprint $table) {
            $table->increments('id_jadwal_pengurus');
            $table->integer('id_jadwal_mengajar')->unsigned();
            $table->integer('id_pengurus')->unsigned();
            $table->timestamps();
        });

        Schema::table('jadwal_pengurus', function (Blueprint $table){
            $table->foreign('id_jadwal_mengajar')
            ->references('id_jadwal_mengajar')
            ->on('jadwal_mengajar')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_pengurus')
            ->references('id_pengurus')
            ->on('pengurus_jmmi')
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
        Schema::drop('jadwal_pengurus');
    }
}
