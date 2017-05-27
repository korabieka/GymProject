<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('thumb')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('height');
            $table->dropColumn('weight');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('photo');
        });
    }
}
