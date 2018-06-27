<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripFactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip__facts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_route')->nullable(true)->unsigned();
            $table->integer('id_truck')->nullable(true)->unsigned();
            $table->integer('id_driver')->nullable(true)->unsigned();
            $table->integer('id_carrier1')->nullable(true)->unsigned();
            $table->integer('id_carrier2')->nullable(true)->unsigned();
            $table->integer('id_grocer')->nullable(true)->unsigned();
            $table->double('initial_km',15,8)->nullable(true);
            $table->double('final_km',15,8)->nullable(true);
            $table->double('diessel_quantity_initial',15,8)->nullable(true);
            $table->double('diessel_quantity_final',15,8)->nullable(true);
            $table->date('loading_date')->nullable(true);
            $table->date('arrival_date')->nullable(true);
            $table->double('weight_conteiner',15,8)->nullable(true);
            $table->double('volume',15,8)->nullable(true);
            $table->double('trip_amount',15,8)->nullable(true);
            $table->time('departure_time')->nullable(true);
            $table->time('arrival_time')->nullable(true);
            $table->boolean('ban')->default(false);

            $table->foreign('id_route')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('id_truck')->references('id')->on('trucks')->onDelete('cascade');
            $table->foreign('id_driver')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('id_carrier1')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('id_carrier2')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('id_grocer')->references('id')->on('people')->onDelete('cascade');

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
        Schema::dropIfExists('trip__facts');
    }
}
