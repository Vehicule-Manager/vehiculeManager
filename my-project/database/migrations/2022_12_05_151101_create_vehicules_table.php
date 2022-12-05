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
            $table->string('immatriculation','10');
            $table->integer('id_statuses')->unsigned();
            $table->integer('id_clients')->unsigned();
            $table->integer('id_gear_boxes')->unsigned();
            $table->integer('id_brands')->unsigned();
            $table->integer('id_energies')->unsigned();
            $table->integer('id_types')->unsigned();
            $table->timestamps();
        });

        Schema::table('vehicules', function ($table) {
            $table
                ->foreign('id_statuses')
                ->references('id')
                ->on('statuses');

            $table
                ->foreign('id_clients')
                ->references('id')
                ->on('clients');

            $table
                ->foreign('id_gear_boxes')
                ->references('id')
                ->on('gear_boxes');

            $table
                ->foreign('id_brands')
                ->references('id')
                ->on('brands');

            $table
                ->foreign('id_energies')
                ->references('id')
                ->on('energies');

            $table
                ->foreign('id_types')
                ->references('id')
                ->on('types');
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
