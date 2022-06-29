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
        Schema::create('toko_jasa_pengirimen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_toko");
            $table->foreign("id_toko")->references('id')->on('tokos')->onDelete("cascade");
            $table->unsignedBigInteger("id_jasa_pengiriman");
            $table->foreign("id_jasa_pengiriman")->references('id')->on('jasa_pengirimen')->onDelete("cascade");
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
        Schema::dropIfExists('toko_jasa_pengirimen');
    }
};
