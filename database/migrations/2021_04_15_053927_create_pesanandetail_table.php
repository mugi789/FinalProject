<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanandetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanandetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jumlah', 45);
            $table->string('jumlah_harga', 45);
            $table->foreign('barang_id')->references('id')->on('barang');
            $table->unsignedBigInteger('barang_id');
            $table->foreign('pesanan_id')->references('id')->on('pesanan');
            $table->unsignedBigInteger('pesanan_id');
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->unsignedBigInteger('kategori_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanandetail');
    }
}
