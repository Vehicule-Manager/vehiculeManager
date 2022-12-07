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
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link', 255);
            $table->string('name', 50);
            $table->string('type', 50);
            $table->integer('id_clients')->unsigned();
            $table->integer('id_vehicules')->unsigned();
            $table->timestamps();
        });

        Schema::table('medias', function ($table) {
            $table
                ->foreign('id_clients')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');

            $table
                ->foreign('id_vehicules')
                ->references('id')
                ->on('vehicules')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medias');
    }
};
