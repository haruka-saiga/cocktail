<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCocktailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocktails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('base_id')->unsigned()->index();
            $table->integer('mixer_id')->unsigned()->index();
            $table->string('cocktail_name');
            $table->timestamps();
            
            $table->foreign('base_id')->references('id')->on('bases')->onDelete('cascade');
            $table->foreign('mixer_id')->references('id')->on('mixers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cocktails');
    }
}
