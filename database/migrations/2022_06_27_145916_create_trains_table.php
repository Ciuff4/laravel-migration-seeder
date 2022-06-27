<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 200);
            $table->string('start_station', 200);
            $table->string('end_station', 200);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->char('train_number');
            $table->smallInteger('coaches_number');
            $table->boolean('is_onTime');
            $table->boolean('is_Cancelled');
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
        Schema::dropIfExists('trains');
    }
}
