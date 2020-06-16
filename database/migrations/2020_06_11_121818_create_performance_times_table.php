<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePerformanceTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('performance_times', function (Blueprint $table) {
            $table->bigIncrements('session_id');
            $table->integer('performance_id')->unsigned();
           $table->dateTime('start_of_performance', 0);
           $table->timestamps();
           $table->foreign('performance_id')->references('performance_id')->on('performances')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance_times');
    }
}
