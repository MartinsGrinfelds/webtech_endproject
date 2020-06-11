<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performances extends Model
{
    //
    
     public function performance_times()
    {
        return $this->hasMany('App\PerformanceTimes');
    }
}
