<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('organisation_id');
            $table->Integer('inn');
            $table->String('name_organisation');
            $table->timestamps();
            $table->foreign('organisation_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidДф
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
