<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->Increments('id');
						$table->integer('governorate_id')->unsigned()->nullable();
						$table->mediumText('street_name');
						$table->integer('city_id')->unsigned()->nullable();
						$table->foreign('governorate_id')->references('id')->on('governorates')->onDelete('cascade');
						$table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('boxes');
    }
}
