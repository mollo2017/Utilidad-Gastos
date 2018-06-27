<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Route;

class Poblation extends Model
{
    //
    public function route(){
    	return $this->belongsTo(Route::class);
    }
}
