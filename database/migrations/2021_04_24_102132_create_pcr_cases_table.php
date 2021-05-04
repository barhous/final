<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcr_cases', function (Blueprint $table) {
            $table->id();
           
            $table->foreignId('ambulance_id')->constrained('ambulance');
            $table->foreignId('mission_id')->constrained('mission');
            $table->foreignId('patient_id')->constrained('patient');
            $table->foreignId('case_id')->constrained('case');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcr_cases');
    }
}
