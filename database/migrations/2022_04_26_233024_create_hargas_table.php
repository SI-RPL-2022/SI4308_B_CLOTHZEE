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
        Schema::create('hargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ukuran');
            $table->unsignedBigInteger('id_bahan');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign("id_ukuran")->references('id')->on('ukurans')->onDelete("cascade");
            $table->foreign("id_bahan")->references('id')->on('bahans')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hargas');
    }
};
