<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryReksadanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_reksadanas', function(Blueprint $table){
          $table->increments('id');
          $table->float('nominal');
          $table->timestamps();
        });

        Schema::table('history_reksadanas', function ($table) {
          $table->integer('rd_id')->unsigned();

          $table->foreign('rd_id')->references('id')->on('master_reksadanas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('history_reksadanas');
    }
}
