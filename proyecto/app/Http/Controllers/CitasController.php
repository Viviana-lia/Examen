<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Doctores;
use App\Paciente;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['citas']=cita::paginate(5);
        return view('citas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pacientes = Paciente::all();
        $doctores = Doctores::all();
        return view('citas.create', compact('pacientes'),  compact('doctores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            'fecha' => 'required|string|max:100',
            'hora' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'especialidad' => 'required|string|max:100',
            'paciente_id' => 'required|string|max:100',
            'doctor_id' => 'required|string|max:100'
        ]; 

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        $datosCitas=request()->except('_token');


       Cita::insert($datosCitas);

    
        
        return redirect('citas')->with('Mensaje','Cita agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $doctores = Doctores::all();
        $pacientes = Paciente::all();
        $cita=Cita::findOrFail($id);
        
       

        return view('citas.edit', compact('cita'), compact('pacientes','doctores')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'fecha' => 'required|string|max:100',
            'hora' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'especialidad' => 'required|string|max:100',
            'paciente_id' => 'required|string|max:100',
            'doctor_id' => 'required|string|max:100'
            
           
        ]; 
        

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        

        $datosCitas=request()->except(['_token','_method']);
          
        


        Cita::where('id','=',$id)->update($datosCitas);

        
        return redirect('citas')->with('Mensaje','Cita modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cita::destroy($id);

       
        return redirect('citas')->with('Mensaje','Cita eliminado');
    }
}
