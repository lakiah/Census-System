<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_new', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('name');
            $table->date('birthdate');
            $table->mediumText('gender');
            $table->mediumText('religion');
            $table->mediumText('race');
            $table->mediumText('martial_status');
            $table->mediumText('address');
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
        Schema::dropIfExists('details_new');
    }
}
