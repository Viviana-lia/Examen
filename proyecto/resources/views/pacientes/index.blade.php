@extends('layouts.app')

@section('content')

<div class="container">
    

@if(Session::has('Mensaje'))
    
    <div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje')}}
    </div>
   

@endif

<a href="{{ url('pacientes/create') }}" class="btn btn-success" style="display:inline" >Agregar Paciente</a>
<br/>
<br/>



<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            
            <th>Nombre Completo</th>
            <th>Cedula</th>
            <th>Historial Clinico</th>
            <th>Año de Nacimiento</th>
            <th>Telefono</th>
            <th>Direccion</th>
            

            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{{$loop->iteration}}</td>
           
            
            <td>{{$paciente->nombres}} {{$paciente->apellidos}} </td>
            <td>{{$paciente->cedula}}</td>
            <td>{{$paciente->historialC}}</td>
            <td>{{$paciente->Añonacimiento}}</td>
            <td>{{$paciente->telefono}}</td>
            <td>{{$paciente->direccion}}</td>
            
           

                
            </td>
            
            <td>


            <a class="btn btn-warning" href="{{ url('/pacientes/'.$paciente->id.'/edit') }}">Editar 
            </a>

            

            <form method="post" action="{{ url('/pacientes/'.$paciente->id) }}" style="display:inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?');">Borrar</button>
            </td>
        </tr>
</form>
    @endforeach
    </tbody>
</table>
{{ $pacientes->links() }}
</div>
@endsection