<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->increments('id_absensi');
            $table->integer('id_admin_absensi')->unsigned();
            $table->integer('jumlah_warga');
            $table->timestamps();
        });

        Schema::table('absensi', function (Blueprint $table){
            $table->foreign('id_admin_absensi')
            ->references('id_admin')
            ->on('admin')
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
        Schema::drop('absensi');
    }
}
