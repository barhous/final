<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uh_kit_excursion extends Model
{
    use HasFactory;
    public function uh_kits(){
        return $this->belongsTo(uh_kits::class);
    }
}
