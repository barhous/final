<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
class ambulance_mission extends Model
{
    use HasFactory;

    public function ambulance(){
        return $this->belongsTo(ambulance::class);

    }
    
    public function uh_kits(){
        return $this->hasMany(uh_kit_excursion::Class);
    }
    public function mission(){

        return $this->belongsTo(mission::class);
    }
    public function rescuers(){

        return $this->hasMany(ambulance_mission_rescuer::Class);
    }
    public function cm_kit(){
        return $this->belongsTo(cm_kit);
    }
    public function driver_id(){
        return $this->belongsTo(rescuers::class);
    }
    public function mission_leader_id(){
        return $this->belongsTo(rescuers::class);

    }
    public function location_to_id(){
        return $this->belongsTo(location::class);
    }
    public function location_from_id(){
        return $this->belongsTo(location::class);

    }
}
