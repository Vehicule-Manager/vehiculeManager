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
        Schema::create('credit_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placeOfBirth', 50);
            $table->string('nationality', 50);
            $table->float('budgets', 10, 2);
            $table->string('contract', 60);
            $table->date('contractDate');
            $table->string('banquet', 25);
            $table->string('professionnalStatus', 50);
            $table->string('familySituation', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_infos');
    }
};
