<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableListVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_vehicles', function (Blueprint $table) {
            $table->increments('Veid');
            $table->string('platenum')->unique();
            $table->string('model');
            $table->string('VIN');
            $table->string('name');
            $table->integer('user_id');
            $table->mediumText('color');
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

