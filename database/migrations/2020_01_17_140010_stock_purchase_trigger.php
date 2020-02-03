<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockPurchaseTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER tr_updStockPurchase AFTER INSERT ON `purchase_details`
            FOR EACH ROW BEGIN
                UPDATE clothes SET stock = stock + NEW.quantity
                WHERE clothes.id = NEW.clothe_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_updStockPurchase`');
    }
}
