<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clothe_models_id');
            $table->foreign('clothe_models_id')->references('id')->on('clothe_models');
            $table->unsignedBigInteger('colors_id');
            $table->foreign('colors_id')->references('id')->on('colors');
            $table->unsignedBigInteger('sizes_id');
            $table->foreign('sizes_id')->references('id')->on('sizes');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('clothes');
    }
}
