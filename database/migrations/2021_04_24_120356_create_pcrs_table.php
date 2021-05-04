<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcrs', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->unique();
            $table->foreignId('ambulance_id')->constrained('ambulance');
            $table->foreignId('mission_id')->constrained('mission');
            $table->foreignId('patient_id')->constrained('patient');
            $table->foreignId('case_id')->constrained('cases');
            
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
        Schema::dropIfExists('pcrs');
    }
}
