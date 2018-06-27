<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip__results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_trip_fact')->unsigned();
            $table->double('total_expense',15,8)->nullable(true);
            $table->double('total_boxes',15,8)->nullable(true);
            $table->double('total_km',15,8)->nullable(true);
            //$table->double('total_diessel',15,8)->nullable(true);
            $table->double('cost_per_box',15,8)->nullable(true);
            $table->double('cost_per_km',15,8)->nullable(true);
            $table->double('gross_profit',15,8)->nullable(true);
            $table->double('net_gross',15,8)->nullable(true);

            $table->foreign('id_trip_fact')->references('id')->on('trip_facts')->onDelete('cascade');

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
        Schema::dropIfExists('trip__results');
    }
}
