<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('train_id');
            $table->unsignedBigInteger('departure_station');
            $table->unsignedBigInteger('arrival_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->dateTime('road_time');
            $table->timestamps();
            $table->foreign('train_id')
                ->references('id')->on('trains')
                ->onDelete('cascade');
            $table->foreign('departure_station')
                ->references('id')->on('stations')
                ->onDelete('cascade');
            $table->foreign('arrival_station')
                ->references('id')->on('stations')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
