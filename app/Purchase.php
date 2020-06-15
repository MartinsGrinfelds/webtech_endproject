<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    public function user() {
        
        return $this->belongsTo(User::class);
        
    } 
     public function performance_time() {
        
        return $this->hasOne(PerformanceTime::class);
        
    } 
}
