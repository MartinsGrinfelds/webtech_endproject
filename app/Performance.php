<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    //
    
     public function performance_times()
    {
        return $this->hasMany('App\PerformanceTimes');
    }
}
