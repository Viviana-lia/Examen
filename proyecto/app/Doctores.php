<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    //
    protected $fillable=[
        'nombre',
        'apellido',
        'NombreE',
        'cargo',
        'observaciones'
    
    ];
    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
}
