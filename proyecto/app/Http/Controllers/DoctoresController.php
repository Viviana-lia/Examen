<?php

namespace App\Http\Controllers;

use App\Doctores;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['doctores']=Doctores::paginate(5);
        return view('doctores.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('doctores.create');
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
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'NombreE' => 'required|string|max:100',
            'cargo' => 'required|string|max:100',
            'observaciones' => 'required|string|max:100'
        ]; 

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        $datosDoctores=request()->except('_token');


       Doctores::insert($datosDoctores);

    
        
        return redirect('doctores')->with('Mensaje','Doctor agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function show(Doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $doctor=Doctores::findOrFail($id);

        return view('doctores.edit', compact('doctor')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctores $doctores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'NombreE' => 'required|string|max:100',
            'cargo' => 'required|string|max:100',
            'observaciones' => 'required|string|max:100'
            
        ]; 
           

        

        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request,$campos,$Mensaje); 

        

        $datosDoctores=request()->except(['_token','_method']);
          
        


       Doctores::where('id','=',$id)->update($datosDoctores);

       
        return redirect('doctores')->with('Mensaje','Doctor modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctores $doctores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Doctores::destroy($id);
      
        return redirect('doctores')->with('Mensaje','Doctor  eliminado');
    }
}
