<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Animaux extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animaux', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('dateEntrer');
            $table->timestamp('dateSortit');
            $table->int('age');
            $table->string('sexe');
            $table->int('poids');
            $table->bool('sortieCage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux');
    }
}
