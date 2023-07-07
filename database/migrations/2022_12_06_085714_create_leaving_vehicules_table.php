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
        Schema::create('leaving_vehicules', function (Blueprint $table) {
            $table->increments('id');
            $table->date('leavingDate');
            $table->date('renderDate');
            $table->integer('id_statuses')->unsigned();
            $table->integer('id_clients')->unsigned();
            $table->integer('id_vehicules')->unsigned();
            $table->timestamps();
        });

        Schema::table('leaving_vehicules', function ($table) {
            $table
                ->foreign('id_statuses')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade');

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
        Schema::dropIfExists('leaving_vehicules');
    }
};
