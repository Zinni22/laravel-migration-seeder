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
            $table->string('azienda', 50);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo', 100);
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_treno', 10)->nullable();
            $table->tinyInteger('numero_carrozze')->unsigned() -> nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancellato')->default(false);
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
