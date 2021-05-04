<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
class ambulance_mission_rescuer extends Model
{
    use HasFactory;
    public function mission_id(){
        return $this->belongsTo(mission::class);
    }
    public function ambulance_id(){
        return $this->belongsTo(ambulance::class);
    }
    public function rescuer_id(){
        return $this->belongsTo(rescuers::class);
    }
}
