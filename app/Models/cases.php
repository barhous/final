<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cases extends Model
{
    use HasFactory;
    public function creator_id(){

        return $this->belongsTo(User::Class);
    }
    
}
