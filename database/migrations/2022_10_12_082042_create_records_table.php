<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id()->comment("編號");
            $table->string("school_year",191)->nullable(false)->comment("學年");
            $table->string("semester",191)->nullable(false)->comment("學期");
            $table->integer("sid")->unsigned()->nullable(false)->comment("學生編號(外鍵)");
            $table->integer("bid")->unsigned()->nullable(false)->comment("床位(外鍵)");
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
        Schema::dropIfExists('records');
    }
}
