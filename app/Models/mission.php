<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    use HasFactory;
    public function creator_id(){
        return $this->belongsTo(User::class);
    }
    public function type_code(){
        return $this->belongTo(mission_types::class);
    }
    public function ambulances_mission(){
        return $this->hasMany(ambulance_mission::class);
    }
    public function ambulances(){

        return $this->hasManyThrough(ambulance::class,ambulance_mission::class);
    }

}
