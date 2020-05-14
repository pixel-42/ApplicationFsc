<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {

            $table->Integer('inn')->nullable();
            $table->String('name_organisation')->nullable();
            $table->String('address')->nullable();
            $table->String('contact_person')->nullable();
            $table->String('region')->nullable();
            $table->String('forestry')->nullable();
            $table->String('forest_district')->nullable();
            $table->String('tract')->nullable();
            $table->String('list_blocks')->nullable();
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function(Blueprint $table)
        {
            $table->dropColumn('inn');
            $table->dropColumn('name_organisation');
            $table->dropColumn('comment');
        });
    }
}
