<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblListVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_vehicle', function (Blueprint $table) {
            $table->increments('Veid');
            $table->string('platenum')->unique();
            $table->string('brand');
            $table->string('model');
            $table->string('name');
            $table->string('type');
            $table->string('transmission');
            $table->string('manu_yr');
            $table->mediumText('color');
            $table->integer('user_id');
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
        Schema::dropIfExists('list_vehicles');
    }
}
