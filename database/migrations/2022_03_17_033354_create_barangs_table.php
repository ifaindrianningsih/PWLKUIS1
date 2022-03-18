<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->String('nama_mobil', 25);
            $table->String('gambar');
            $table->String('harga', 25);
            $table->String('transmisi',25);
            $table->String('bahan_bakar',15);
            $table->String('mesin', 25);
            $table->integer('tempat_duduk');
            $table->String('varian_warna',50);
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
        Schema::dropIfExists('barang');
    }
}
