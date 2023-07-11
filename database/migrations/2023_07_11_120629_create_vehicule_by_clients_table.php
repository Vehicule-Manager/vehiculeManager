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
        Schema::create('vehicules_by_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_clients')->unsigned();
            $table->integer('id_vehicules')->unsigned();
            $table->timestamps();
        });

        Schema::table('vehicules_by_clients', function ($table) {
            $table
                ->foreign('id_vehicules')
                ->references('id')
                ->on('vehicules')
                ->onDelete('cascade');

            $table
                ->foreign('id_clients')
                ->references('id')
                ->on('clients')
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
        Schema::dropIfExists('vehicules_by_clients');
    }
};
