<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambulance extends Model
{
    use HasFactory;
    public function missions(){
        return $this->hasMany(ambulance_mission::Class);
    }
    public function creator_id(){

        return $this->belongsTo(User::Class);
    }

}
