<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// use Illuminate\Support\Facades\Schema;


class CreateTableTransaksipenjualanBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksipenjualan_barang', function (Blueprint $table) {
            $table->increments('id_transaksipenjualan_barang');
            $table->integer('id_penjualan_barang')->unsigned();
            $table->integer('id_barang')->unsigned();
            $table->timestamps();
        });

        Schema::table('transaksipenjualan_barang', function (Blueprint $table) {
            $table->foreign('id_penjualan_barang')
            ->references('id_penjualan')
            ->on('transaksi_penjualan')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::table('transaksipenjualan_barang', function(Blueprint $table){
            $table->dropForeign('transaksipenjualan_barang_id_penjualan_barang_foreign');
            
            $table->dropForeign('transaksipenjualan_barang_id_barang_foreign');
        });


        Schema::drop('transaksipenjualan_barang');
    }
}
