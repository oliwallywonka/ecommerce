<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockPurchaseNullerTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER tr_updStockPurchaseNuller AFTER UPDATE ON `purchases`
            FOR EACH ROW BEGIN
                UPDATE clothes c JOIN purchase_details di ON di.clothe_id = c.id AND di.purchase_id = NEW.id SET c.stock = c.stock - di.quantity;
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
        DB::unprepared('DROP TRIGGER `tr_updStockPurchaseNuller`');
    }
}
