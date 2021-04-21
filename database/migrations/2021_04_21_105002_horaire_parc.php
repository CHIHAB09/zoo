<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HoraireParc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaireParc', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Houverture');
            $table->timestamp('Hfermeture');
            $table->timestamp('Jfermeture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaireParc');
    }
}
