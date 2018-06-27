<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilledExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billed_expenses', function (Blueprint $table) {
            $table->increments('id');
            //mostrar
            $table->integer('id_trip')->nullable(true)->unsigned();
            $table->double('foods',15,8)->nullable(true);
            $table->double('foreign_diessel',15,8)->nullable(true);
            $table->double('permissions',15,8)->nullable(true);
            $table->double('hostage',15,8)->nullable(true);
            $table->double('cargo_van',15,8)->nullable(true);
            $table->double('vulcanizer',15,8)->nullable(true);
            $table->double('repairs',15,8)->nullable(true);
            $table->double('tollbooth',15,8)->nullable(true);
            $table->double('iave_tollbooth',15,8)->nullable(true);
            $table->double('maneuvers',15,8)->nullable(true);
            $table->double('spare_parts',15,8)->nullable(true);
            $table->double('other',15,8)->nullable(true);

            $table->double('driver_salary',15,8)->nullable(true);
            $table->double('carrier1_salary',15,8)->nullable(true);
            $table->double('carrier2_salary',15,8)->nullable(true);
            $table->double('passages',15,8)->nullable(true);
            $table->double('agents_commission',15,8)->nullable(true);
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
        Schema::dropIfExists('billed_expenses');
    }
}
