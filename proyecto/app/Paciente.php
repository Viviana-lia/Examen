<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable=[
        'nombres',
        'apellidos',
        'cedula',
        'historiaC',
        'Añonacimiento',
        'telefono'
    
    ];
    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
}
