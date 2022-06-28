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
        Schema::create('cara_bayar_tokos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_toko");
            $table->foreign("id_toko")->references('id')->on('tokos')->onDelete("cascade");
            $table->unsignedBigInteger("id_cara_bayar");
            $table->foreign("id_cara_bayar")->references('id')->on('cara_bayars')->onDelete("cascade");
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
        Schema::dropIfExists('cara_bayar_tokos');
    }
};
