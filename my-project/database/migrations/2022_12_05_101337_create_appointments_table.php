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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->DATE('Date and hour');
            $table->string('description');
            $table->integer('id_employees')->unsigned();
            $table->integer('id_clients')->unsigned();
            $table->integer('id_objects')->unsigned();
            $table->timestamps();
        });

        Schema::table('appointments', function ($table) {
            $table
                ->foreign('id_employees')
                ->references('id')
                ->on('employees');

            $table
                ->foreign('id_clients')
                ->references('id')
                ->on('clients');

            $table
                ->foreign('id_objects')
                ->references('id')
                ->on('objects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
