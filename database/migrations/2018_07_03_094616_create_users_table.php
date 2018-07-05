<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tbl', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name',25);
            $table->string('password',256);
            $table->string('first_name',256);
            $table->string('middle_name',256);
            $table->string('last_name',256);
            $table->smallInteger('gender');
            $table->string('email',256);
            $table->smallInteger('user_type');
            $table->smallInteger('account_status');
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
        Schema::dropIfExists('users');
    }
}
