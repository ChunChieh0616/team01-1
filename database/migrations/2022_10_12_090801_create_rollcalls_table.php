<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollcallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rollcalls', function (Blueprint $table) {
            $table->id()->comment("編號");
            $table->dateTime("date")->nullable(false)->comment("點名日期");
            $table->integer("bid")->unsigned()->nullable(false)->comment("床位編號");
            $table->boolean("presence")->nullable(false)->comment("在場與否");
            $table->boolean("leaves")->nullable(false)->comment("外宿");
            $table->boolean("late")->nullable(false)->comment("晚歸");
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
        Schema::dropIfExists('rollcalls');
    }
}
