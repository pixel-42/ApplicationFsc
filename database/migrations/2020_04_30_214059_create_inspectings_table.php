<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspectings', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('responsible');
            $table->string('phone');
            $table->integer('inspecting_id')->unsigned();
            $table->string('inspecting_name');
            $table->foreign('inspecting_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspectings');
    }
}
