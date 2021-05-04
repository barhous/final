<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulanceMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulance_missions', function (Blueprint $table) {
            $table->id();
            
            
            $table->foreignId('ambulance_id')->constrained('ambulance');
            $table->foreignId('mission_id')->constrained('mission');
            $table->foreignId('driver_id')->constrained('rescuer');
            $table->foreignId('mission_leader_id')->constrained('rescuer');
            $table->foreignId('cm_kit_id')->constrained('cm_kit');
            $table->foreignId('location_from_id')->constrained('location');
            $table->foreignId('location_to_id')->constrained('location');
           
            $table->integer('km_before');
            $table->integer('km_after');
            $table->integer('m_tank_pressure');
            $table->integer('oxygen_consumption');
            $table->time('departure_to_site_time');
            $table->time('arrival_to_site_time');
            $table->time('return_to_station_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulance_missions');
    }
}
