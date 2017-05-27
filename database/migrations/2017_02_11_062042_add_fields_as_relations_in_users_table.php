<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsAsRelationsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('trainer_id')->unsigned()->nullable();
            $table->foreign('trainer_id')->references('id')->on('users');
            $table->integer('diet_id')->unsigned()->nullable();
            $table->foreign('diet_id')->references('id')->on('diets');
            $table->integer('supplement_id')->unsigned()->nullable();
            $table->foreign('supplement_id')->references('id')->on('supplements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
