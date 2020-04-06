@extends('layouts.app')

@section('content')

<div class="container">

@if(count($errors)>0)
<div class="alert alert-primary" role="alert">
    <ul>
        @foreach($errors->all() as $error)

        <li> {{ $error}} </li>
        
        @endforeach
    </ul>

</div> 
@endif 
                    <h3>Ingreso de Pacientes</h3>
                
                
                
                <form action="{{ url('/pacientes')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}

                 @include('pacientes.form',['Modo'=>'crear'])

                
                
                </form>
                
                
                
                </div>





@endsection