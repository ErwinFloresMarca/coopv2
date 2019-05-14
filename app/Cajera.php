<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Amortizacion;
class Cajera extends Model
{
    //
    protected $table="cajeras";

    public function amortizaciones(){
    	return $this->hasMany(Amortizacion::class);
    }
}
