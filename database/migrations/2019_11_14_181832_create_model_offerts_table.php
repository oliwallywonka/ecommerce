<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelOffertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_offerts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clothe_model_id');
            $table->foreign('clothe_model_id')->references('id')->on('clothe_models');
            $table->integer('offert_porcent')->default(0);
            $table->integer('offert_days')->default(0);
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
        Schema::dropIfExists('model_offerts');
    }
}
