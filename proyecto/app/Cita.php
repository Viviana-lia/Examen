<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //
    protected $fillable=[
        'paciente_id',
        'doctor_id',
        'fecha',
        'hora',
        'estado'

    
    ];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente','paciente_id');
    }
    public function doctore()
    {
        return $this->belongsTo('App\Doctores','doctor_id');
    }
    
}
