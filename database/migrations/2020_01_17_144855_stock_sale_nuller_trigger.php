<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockSaleNullerTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER tr_udpStockSaleNuller AFTER UPDATE ON `sales`
            FOR EACH ROW BEGIN
                UPDATE clothes c JOIN sale_details di ON di.clothe_id = c.id AND di.id_sales = NEW.id SET c.stock = p.stock + di.quantity;
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
        DB::unprepared('DROP TRIGGER `tr_updStockSaleNuller`');
    }
}
