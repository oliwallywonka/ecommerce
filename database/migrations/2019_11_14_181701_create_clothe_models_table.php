<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClotheModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothe_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->unsignedBigInteger('brands_id');
            $table->foreign('brands_id')->references('id')->on('brands');
            $table->unsignedBigInteger('type_clothes_id');
            $table->foreign('type_clothes_id')->references('id')->on('type_clothes');
            $table->float('ref_price',4,2);
            $table->text('description');
            $table->integer('weight');
            $table->string('gender');
            $table->text('care_instructions');
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
        Schema::dropIfExists('clothe_models');
    }
}
