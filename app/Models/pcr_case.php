<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\Pivot;

class pcr_case extends Model
{
    use HasFactory;
    public function case(){
        return $this->belongsTo(cases::class);
    }
    public function pcr(){
        return $this->belongsTo(pcrs::class);
    }
   
}
