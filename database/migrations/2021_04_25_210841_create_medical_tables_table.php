<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_tables', function (Blueprint $table) {
            $table->id();
            $table->string('rapportMedical');
            $table->timestamp('dateRapport')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('medical_tables');
    }
}
