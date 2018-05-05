<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('nama_admin',100);
            $table->string('email_admin',50)->unique();
            $table->string('notelp',20);
            $table->string('alamat',100);
            $table->string('password_admin',50);
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
        
        Schema::drop('admin');
    }
}
