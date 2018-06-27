<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trip_Fact;

class Trip_Result extends Model
{
    //
    public function trip_fact(){
    	return $this->belongsTo(Trip_Fact::class);
    }
}
