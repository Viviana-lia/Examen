@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/doctores/' .$doctor->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

@include('doctores.form',['Modo'=>'editar'])

</form>

</div>
@endsection
