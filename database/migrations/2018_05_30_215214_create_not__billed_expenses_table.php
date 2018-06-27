<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotBilledExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('not__billed_expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_trip')->nullable(true)->unsigned();
            $table->double('driver_food',15,8)->nullable(true);
            $table->double('carrier1_food',15,8)->nullable(true);
            $table->double('carrier2_food',15,8)->nullable(true);
            $table->double('permissions',15,8)->nullable(true);
            $table->double('boardinghouse',15,8)->nullable(true);
            $table->double('parking',15,8)->nullable(true);
            $table->double('cargo_van',15,8)->nullable(true);
            $table->double('maneuvers',15,8)->nullable(true);
            $table->double('repairs',15,8)->nullable(true);
            $table->double('other',15,8)->nullable(true);
            $table->double('mulcts',15,8)->nullable(true);
            $table->double('totalsum',15,8)->nullable(true);

            $table->foreign('id_trip')->references('id')->on('trip_facts')->onDelete('cascade');
            
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
        Schema::dropIfExists('not__billed_expenses');
    }
}
