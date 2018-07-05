<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_items_tbl', function (Blueprint $table) {
            $table->increments('supply_items_id');
            $table->integer('supply_preset_item_id')->unsigned();
            $table->integer('supply_package_id')->unsigned();
            $table->integer('quantity');
            $table->dateTime('expiry_date')->nullable();
        });

        Schema::table('supply_items_tbl', function (Blueprint $table) {
            $table->foreign('supply_preset_item_id')->references('preset_item_id')->on('preset_items_tbl');
            $table->foreign('supply_package_id')->references('supply_package_id')->on('supply_packages_tbl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_items');
    }
}
