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
        Schema::create('vehicle_by_articles', function (Blueprint $table) {
            $table->id();
            $table->integer('id_vehicles')->unsigned();
            $table->integer('id_articles')->unsigned();
            $table->timestamps();
        });

        Schema::table('vehicle_by_articles', function ($table) {
            $table
                ->foreign('id_vehicles')
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
        Schema::dropIfExists('vehicle_by_articles');
    }
};
