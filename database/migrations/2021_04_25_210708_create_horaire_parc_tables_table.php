<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoraireParcTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire_parc_tables', function (Blueprint $table) {
            $table->id();
            $table->string('rapportMedical');
            $table->timestamp('dateRapport');
            $table->unsignedBigInteger('animal_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horaire_parc_tables');
    }
}
