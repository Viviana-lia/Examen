@extends('layouts.app')

@section('content')

<div class="container">
    

@if(Session::has('Mensaje'))
    
    <div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje')}}
    </div>
   

@endif

<a href="{{ url('citas/create') }}" class="btn btn-success" style="display:inline" >Agregar Cita</a>
<br/>
<br/>



<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            
            
            <th>Fecha</th>
            <th>Hora</th>
            <th>Paciente</th>
            <th>Doctor</th>
            <th>Especialidad</th>
            <th>Estado</th>
            
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($citas as $cita)
        <tr>
            <td>{{$loop->iteration}}</td>
           
            
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->hora}}</td> 
           
            <td>{{$cita->paciente->nombres}} {{$cita->paciente->apellidos}}</td>
            
            <td>{{$cita->doctore->nombre}} {{$cita->doctore->apellido}}</td>
            <td>{{$cita->doctore->NombreE}}</td>
         
            <td>{{$cita->estado}}</td>

           
                
            </td>
            
            <td>


            <a class="btn btn-warning" href="{{ url('/citas/'.$cita->id.'/edit') }}">Editar 
            </a>

            

            <form method="post" action="{{ url('/citas/'.$cita->id) }}" style="display:inline">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?');">Borrar</button>
            </td>
        </tr>
</form>
    @endforeach
    </tbody>
</table>
{{ $citas->links() }}
</div>
@endsection