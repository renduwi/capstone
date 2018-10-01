<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTwoColumnsTblrepair extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_shop', function($table){
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username');
            $table->string('workinghrs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair_shop', function($table){
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('username');
            $table->dropColumn('workinghrs');
        });
    }
}
