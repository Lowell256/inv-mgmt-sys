<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        Schema::create('supply_packages_tbl', function (Blueprint $table) {
            $table->increments('supply_package_id');
            $table->string('supply_package_name');
            $table->integer('supply_package_type_id')->unsigned();
            $table->integer('supply_package_supply_id')->unsigned();
        });

        Schema::table('supply_packages_tbl', function (Blueprint $table) {
            $table->foreign('supply_package_type_id')->references('package_type_id')->on('packages_type_tbl');
            $table->foreign('supply_package_supply_id')->references('supply_id')->on('supplies_tbl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supply_packages');
    }
}
