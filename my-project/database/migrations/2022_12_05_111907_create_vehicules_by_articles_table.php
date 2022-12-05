<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules_by_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_vehicules')->unsigned();
            $table->integer('id_articles')->unsigned();
            $table->timestamps();
        });

        Schema::table('vehicules_by_articles', function ($table) {
            $table
                ->foreign('id_vehicules')
                ->references('id')
                ->on('vehicules');

            $table
                ->foreign('id_articles')
                ->references('id')
                ->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules_by_articles');
    }
};
