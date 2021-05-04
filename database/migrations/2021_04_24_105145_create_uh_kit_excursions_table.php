<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUhKitExcursionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uh_kit_excursions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ambulance_mission_id')->constrained('ambulance_mission');    
            $table->foreignId('uh_kit_id')->constrained('uh_kits');
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
        Schema::dropIfExists('uh_kit_excursions');
    }
}
