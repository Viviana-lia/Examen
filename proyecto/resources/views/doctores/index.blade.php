@extends('layouts.app')

@section('content')

<div class="container">
    

@if(Session::has('Mensaje'))
    
    <div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje')}}
    </div>
   

@endif

<a href="{{ url('doctores/create ') }}" class="btn btn-success" >Agregar Doctor</a>
<br/>
<br/>



<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre Completo del Doctor</th>
            <th>Especialidad</th>
            <th>Cargos</th>
            <th>Observaciones</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($doctores as $doctor)
  <tr>
           <td>{{$loop->iteration}}</td>

            <td>{{$doctor->nombre}} {{$doctor->apellido}} </td>
            <td>{{$doctor->NombreE}} </td>
            <td>{{$doctor->cargo}}</td>
            <td>{{$doctor->observaciones}}</td>
            
            <td>

                <a class="btn btn-warning" href="{{ url('/doctores/'.$doctor->id.'/edit') }}">Editar 
                </a>



                <form method="post" action="{{ url('/doctores/'.$doctor->id) }}" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿BORRAR?');">Borrar</button>
                </td>
        </tr>  
</form> 
        @endforeach
    </tbody>
</table>
{{ $doctores->links() }}
</div>
@endsection