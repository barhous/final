<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcrs extends Model
{
    use HasFactory;
    public function cases(){
        return $this->hasMany(pcr_case::class);
    }
    public function patient(){
        return $this->belongsTo(patient::Class);
    }
    public function ambulance(){
        return $this->belongsTo(ambulance::Class);
    }
    public function mission(){
        return $this->belongsTo(mission::Class);
    }
    public function identifier(){
        
        
        

    }
}
