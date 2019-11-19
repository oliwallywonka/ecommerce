<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClotheMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothe_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('materials_id');
            $table->foreign('materials_id')->references('id')->on('materials');
            $table->unsignedBigInteger('clothe_models_id');
            $table->foreign('clothe_models_id')->references('id')->on('clothe_models');
            $table->float('porcent');
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
        Schema::dropIfExists('clothe_materials');
    }
}
