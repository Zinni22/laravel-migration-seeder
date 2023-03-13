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
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('azienda');
            $table->string('stazione di partenza');
            $table->string('stazione di arrivo');
            $table->time('orario di partenza');
            $table->time('orario di arrivo');
            $table->integer('codice Treno');
            $table->integer('numero Carrozze');
            $table->boolean('in orario');
            $table->boolean('cancellato');
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
        Schema::dropIfExists('trains');
    }
};
