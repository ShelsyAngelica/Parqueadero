<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('car_plate');
            $table->unsignedBigInteger("type_vehicle_id");
            $table->dateTime('entry_date');
            $table->dateTime('departure_date')->nullable();
            $table->float('value')->nullable();
            $table->timestamps();

            $table->foreign('type_vehicle_id')->references('id')->on('types_of_vehicles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
