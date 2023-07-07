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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('new');
            $table->date('firstDateCicrulate');
            $table->text('description');
            $table->float('horsepower');
            $table->float('price');
            $table->date('enterDate');
            $table->date('leavingDate');
            $table->string('immatriculation', '10');
            $table->integer('id_statuses')->unsigned();
            $table->integer('id_clients')->unsigned();
            $table->integer('id_gear_boxes')->unsigned();
            $table->integer('id_brands')->unsigned();
            $table->integer('id_energies')->unsigned();
            $table->integer('id_types')->unsigned();
            $table->integer('id_model_car')->unsigned();
            $table->timestamps();
        });

        Schema::table('vehicules', function ($table) {
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
                ->foreign('id_gear_boxes')
                ->references('id')
                ->on('gear_boxes')
                ->onDelete('cascade');

            $table
                ->foreign('id_brands')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade');

            $table
                ->foreign('id_energies')
                ->references('id')
                ->on('energies')
                ->onDelete('cascade');

            $table
                ->foreign('id_types')
                ->references('id')
                ->on('types')
                ->onDelete('cascade');

            $table
                ->foreign('id_model_car')
                ->references('id')
                ->on('model_car')
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
        Schema::dropIfExists('vehicules');
    }
};
