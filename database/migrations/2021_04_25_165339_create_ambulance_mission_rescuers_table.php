<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulanceMissionRescuersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulance_mission_rescuers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ambulance_id')->constrained('ambulance');
            $table->foreignId('mission_id')->constrained('mission');
            $table->foreignId('rescuer_id')->constrained('rescuers');
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
        Schema::dropIfExists('ambulance_mission_rescuers');
    }
}
