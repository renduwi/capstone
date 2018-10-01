<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMechaniclist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_mechanic', function (Blueprint $table) {
            $table->increments('Mid');
            $table->text('lname');
            $table->text('fname');
            $table->text('mi');
            $table->string('phonenum');
            $table->string('type');
            $table->string('availability');
            $table->integer('Rpid');
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
        Schema::drop('list_mechanic');
    }
}
