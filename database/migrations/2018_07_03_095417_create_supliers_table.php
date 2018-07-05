<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers_tbl', function (Blueprint $table) {
            $table->increments('supplier_id');
            $table->string('supplier_name',256);
            $table->string('address',256);
            $table->string('contact_number',256);
            $table->string('email',256);
            $table->string('contact_one_name',256);
            $table->string('contact_one_email',256);
            $table->string('contact_one_number',256);
            $table->string('contact_two_name',256);
            $table->string('contact_two_email',256);
            $table->string('contact_two_number',256);
            $table->string('contact_three_name',256);
            $table->string('contact_three_email',256);
            $table->string('contact_three_number',256);
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
        Schema::dropIfExists('supliers');
    }
}
