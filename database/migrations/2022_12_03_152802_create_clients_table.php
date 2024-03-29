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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civility', 3);
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->date('birthDate');
            $table->string('address', 150);
            $table->string('optionalAddress', 150)->nullable();
            $table->string('zipCode', 7);
            $table->string('city', 100);
            $table->integer('id_users')->unsigned();
            $table->integer('id_creditInfos')->unsigned();

            $table->timestamps();
        });
        Schema::table('clients', function ($table) {
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_creditInfos')->references('id')->on('credit_infos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
