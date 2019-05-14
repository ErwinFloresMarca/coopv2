<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Prestamo;
class Asesor extends Model
{
    protected $table = 'asesores';
    public function prestamos() {
    	return $this->hasMany(Prestamo::class);
    }
}
