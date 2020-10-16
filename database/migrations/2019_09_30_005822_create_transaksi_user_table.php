<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_user', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->timestamps('tanggal');
            $table->string('nama_user');
            $table->string('kode_transaksi');
            $table->string('kode_produk');
            $table->string('nomor_pelanggan');
            $table->integer('harga');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_user');
    }
}
