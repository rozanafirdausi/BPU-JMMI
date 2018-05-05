<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksiBantuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_bantuan', function (Blueprint $table) {
            $table->increments('id_bantuan');
            $table->integer('id_admin')->unsigned();
            $table->string('nama_donatur',100);
            $table->timestamps();
            $table->string('jenis_bantuan',50);
            $table->integer('jumlah_bantuan');
        });

        Schema::table('transaksi_bantuan', function (Blueprint $table) {
            $table->foreign('id_admin')
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
        Schema::table('transaksi_bantuan', function(Blueprint $table){
            $table->dropForeign('transaksi_bantuan_id_admin_foreign');
        });

        Schema::drop('transaksi_bantuan');
    }
}
