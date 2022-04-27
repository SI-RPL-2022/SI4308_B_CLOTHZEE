<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukurans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->string('kategori'); //s/m/l/xl/xxl
            $table->string('lingkar_dada')->nullable();
            $table->string('lingkar_pinggang')->nullable();
            $table->string('lingkar_panggul')->nullable();
            $table->string('lebar_paha')->nullable();
            $table->string('panjang_kaki')->nullable();
            $table->timestamps();

            $table->foreign("id_produk")->references('id')->on('produks')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukurans');
    }
};
