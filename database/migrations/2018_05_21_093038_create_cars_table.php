<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dealer_id');
            $table->string('image');
            $table->string('video');
            $table->year('year');
            $table->string('make');
            $table->string('model');
            $table->string('trim');
            $table->string('city');
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->string('location');
            $table->string('color');
            $table->integer('mileage');
            $table->integer('price');
            $table->string('transmission');
            $table->integer('engine');
            $table->text('desc');
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
        Schema::dropIfExists('cars');
    }
}
