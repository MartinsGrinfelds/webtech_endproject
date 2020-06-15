<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerformanceTime extends Model
{
    //
     public function performances() {
        
        return $this->hasMany(Performance::class);
        
    }
     public function purchases() {
        
        return $this->belongsTo(Purchase::class);
        
    }
}
