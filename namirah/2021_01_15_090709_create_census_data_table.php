<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCensusDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('census_data', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table ->integer('id');
            $table ->string('name');
            $table ->integer('age');
            $table ->string('gender');
            $table ->string('religion');
            $table ->string('status');
            $table ->string('address');
            $table ->string('state');

            //$table ->foreign('age')->reference('')->on('censusData');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('census_data');
    }
}
