<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('dateEntrer')->nullable();
            $table->timestamp('dateSortie')->nullable();
            $table->timestamp('dateNaissance')->nullable();
            $table->string('sexe');
            $table->integer('poids');
            $table->boolean('sortieCage');
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
        Schema::dropIfExists('animal_tables');
    }
}
