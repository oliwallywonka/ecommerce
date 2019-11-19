<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employees_id');
            $table->foreign('employees_id')->references('id')->on('employees');
            $table->unsignedBigInteger('wholesellers_id');
            $table->foreign('wholesellers_id')->references('id')->on('wholesellers');
            $table->unsignedBigInteger('travels_id');
            $table->foreign('travels_id')->references('id')->on('travels');
            $table->float('total_cost',5,2);
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
        Schema::dropIfExists('purchases');
    }
}
