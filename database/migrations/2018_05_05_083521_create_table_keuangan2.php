<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKeuangan2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangan2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_admin')->unsigned();
            $table->date('tanggal');
            $table->string('item_pengeluaran_pemasukan',50);
            $table->integer('debit');
            $table->integer('kredit');
            $table->integer('jumlah_uang');
            $table->string('keterangan',50);
            $table->timestamps();            
        });

        Schema::table('keuangan2', function (Blueprint $table) {
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
        Schema::table('keuangan2', function(Blueprint $table){
            $table->dropForeign('keuangan2_id_admin_foreign');
        });
        
        Schema::drop('keuangan2');
    }
}
