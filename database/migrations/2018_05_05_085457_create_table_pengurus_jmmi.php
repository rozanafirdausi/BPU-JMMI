<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengurusJmmi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus_jmmi', function (Blueprint $table) {
            $table->increments('id_pengurus');
            $table->string('nama_pengurus',100);
            $table->string('email',50)->unique();
            $table->string('alamat_pengurus',100);
            $table->string('notelp_pengurus',20);
            $table->string('password_pengurus',50);
            $table->enum('jenis_kelamin',['L','P']);
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
        Schema::drop('pengurus_jmmi');
    }
}
