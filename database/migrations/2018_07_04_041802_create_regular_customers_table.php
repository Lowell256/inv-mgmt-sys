<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegularCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regular_customers_tbl', function (Blueprint $table) {
            $table->increments('regular_customer_id');
            $table->string('customer_name',256);
            $table->string('address',256);
            $table->string('contact_number',256);
            $table->string('email',256);
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
        Schema::dropIfExists('regular_customers');
    }
}
