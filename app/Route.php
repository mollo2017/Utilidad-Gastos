<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Trip_Fact;
use App\Poblation;

class Route extends Model
{
    //
    public function poblations(){
    	return $this->hasMany(Poblation::class);
    }
    public function trip_fact(){
    	return $this->hasOne(Trip_Fact::class);
    }
    
}
