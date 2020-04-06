<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pacientes']=Paciente::paginate(5);
        return view('pacientes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view('pacientes.create');
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
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'cedula' => 'required|string|max:100',
            'historialC' => 'required|string|max:100',
            'Añonacimiento' => 'required|string|max:100',
            'telefono' => 'required|string|max:100',
            'direccion' => 'required|string|max:100'
        ]; 

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        $datosPacientes=request()->except('_token');


       paciente::insert($datosPacientes);

    
        
        return redirect('pacientes')->with('Mensaje','paciente agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente=Paciente::findOrFail($id);

        return view('pacientes.edit', compact('paciente')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'cedula' => 'required|string|max:100',
            'historialC' => 'required|string|max:100',
            'Añonacimiento' => 'required|string|max:100',
            'telefono' => 'required|string|max:100',
            'direccion' => 'required|string|max:100'
        ]; 
           
     
        

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        

        $datosPacientes=request()->except(['_token','_method']);
          
        


       Paciente::where('id','=',$id)->update($datosPacientes);

       
        return redirect('pacientes')->with('Mensaje','paciente modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Paciente::destroy($id);
      
        return redirect('pacientes')->with('Mensaje','paciente eliminado');
    }
}
