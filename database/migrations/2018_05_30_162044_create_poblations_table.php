<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoblationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poblations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('poblation_name');
            $table->integer('id_route1')->unsigned();
            $table->integer('id_route2')->nullable(true)->unsigned();
            $table->integer('id_route3')->nullable(true)->unsigned();
            $table->integer('id_route4')->nullable(true)->unsigned();
            $table->foreign('id_route1')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('id_route2')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('id_route3')->references('id')->on('routes')->onDelete('cascade');
            $table->foreign('id_route4')->references('id')->on('routes')->onDelete('cascade');
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
        Schema::dropIfExists('poblations');
    }
}
