<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksipenjualanBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('transaksipenjualan_barang');
        Schema::create('transaksipenjualan_barang', function (Blueprint $table) {
            $table->increments('id_transaksipenjualan_barang');
            $table->integer('id_transaksipenjualan')->unsigned()->index();
            $table->integer('id_barang')->unsigned()->index();
            $table->timestamps();
        });

        // $table->primary(['id_transaksipenjualan','id_barang']);

        $table->foreign('id_penjualan')
        ->references('id_penjualan')
        ->on('transaksi_penjualan')
        ->onDelete('cascade')
        ->onUpdate('cascade');

        $table->foreign('id_barang')
        ->references('id_barang')
        ->on('barang')
        ->onDelete('cascade')
        ->onUpdate('cascade');     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksipenjualan_barang');
    }
}
