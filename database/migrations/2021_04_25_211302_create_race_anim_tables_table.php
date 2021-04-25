<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceAnimTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_anim_tables', function (Blueprint $table) {
            $table->id();
            $table->string('familleAnimal');/*mamifere,poisson,reptile*/
            $table->integer('nbAnimal');
            $table->integer('ageMaturite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_anim_tables');
    }
}
