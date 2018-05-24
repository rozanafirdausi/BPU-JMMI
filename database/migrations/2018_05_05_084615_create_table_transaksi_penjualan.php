<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksiPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penjualan', function (Blueprint $table) {
            $table->increments('id_penjualan');
            $table->integer('id_admin')->unsigned();
            $table->timestamps();
            $table->integer('jumlah_terjual');
            $table->integer('id_barang')->unsigned();
        });

        Schema::table('transaksi_penjualan', function (Blueprint $table) {
            $table->foreign('id_admin')
            ->references('id_admin')
            ->on('admin')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });

        Schema::table('transaksi_penjualan', function (Blueprint $table) {
            $table->foreign('id_barang')
            ->references('id_barang')
            ->on('barang')
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
        Schema::table('transaksi_penjualan', function(Blueprint $table){
            $table->dropForeign('transaksi_penjualan_id_admin_foreign');
        });

        Schema::drop('transaksi_penjualan');
    }
}
