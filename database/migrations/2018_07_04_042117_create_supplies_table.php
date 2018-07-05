<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies_tbl', function (Blueprint $table) {
            $table->increments('supply_id');
            $table->string('supply_name');
            $table->integer('supply_supplier_id')->unsigned();
            $table->string('or_number',256);
            $table->date('requested_date');
            $table->date('delivery_date');
            $table->dateTime('recieved_date')->nullable();
            $table->string('supply_info',256);
            $table->smallInteger('item_status');
        });

        Schema::table('supplies_tbl', function (Blueprint $table) {
            $table->foreign('supply_supplier_id')->references('supplier_id')->on('suppliers_tbl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
}
