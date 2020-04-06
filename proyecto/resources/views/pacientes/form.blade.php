
          


<div class="form-group">

<label for="nombre" class="control-label">{{'Nombres'}}</label>
        <input type="text" class="form-control {{$errors->has('nombres')?'is-invalid':''}}" 
                name="nombres" id="nombres" 
                value="{{isset($paciente->nombres)?$paciente->nombres:old('nombres') }}">
                        {!! $errors->first('nombres','<div class="invalid-feedback">:message</div>') !!}
</div>
               
        <div class="form-group">
                <label for="apellidos" class="control-label">{{'Apellidos'}}</label>
                        <input type="text" class="form-control {{$errors->has('apellidos')?'is-invalid':''}}"
                         name="apellidos" id="apellidos" 
                                 value="{{isset($paciente->apellidos)?$paciente->apellidos:old('apellidos') }}">
                                        {!! $errors->first('apellidos','<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="cedula" class="control-label">{{'Cedula'}}</label>
                        <input type="number" class="form-control {{$errors->has('cedula')?'is-invalid':''}}"
                         name="cedula" id="cedula" 
                                 value="{{isset($paciente->cedula)?$paciente->cedula:old('cedula') }}">
                                        {!! $errors->first('cedula','<div class="invalid-feedback">:message</div>') !!}
        </div>

<div class="form-group">
                <label for="historialC" class="control-label">{{'historialC'}}</label>
                        <input type="text" class="form-control {{$errors->has('historialC')?'is-invalid':''}}"
                         name="historialC" id="historialC" 
                                 value="{{isset($paciente->historialC)?$paciente->historialC:old('historialC') }}">
                                        {!! $errors->first('historialC','<div class="invalid-feedback">:message</div>') !!}
        </div>       

  <div class="form-group">
                <label for="Añonacimiento" class="control-label">{{'Año de nacimiento'}}</label>
                        <input type="number" class="form-control {{$errors->has('Añonacimiento')?'is-invalid':''}}"
                         name="Añonacimiento" id="Añonacimiento" 
                                value="{{isset($paciente->Añonacimiento)?$paciente->Añonacimiento:old('Añonacimiento') }}">
                                         {!! $errors->first('Añonacimiento','<div class="invalid-feedback">:message</div>') !!}
                                         
  </div>   
  <div class="form-group">
                <label for="telefono" class="control-label">{{'Telefono'}}</label>
                        <input type="number" class="form-control {{$errors->has('telefono')?'is-invalid':''}}"
                         name="telefono" id="telefono" 
                                 value="{{isset($paciente->telefono)?$paciente->telefono:old('telefono') }}">
                                        {!! $errors->first('telefono','<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="direccion" class="control-label">{{'direccion'}}</label>
                        <input type="text" class="form-control {{$errors->has('direccion')?'is-invalid':''}}"
                         name="direccion" id="direccion" 
                                value="{{isset($paciente->direccion)?$paciente->direccion:old('direccion') }}">
                                         {!! $errors->first('direccion','<div class="invalid-feedback">:message</div>') !!}
        </div>      
               
      
                        </br> 
                  
          
        
         <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

         <a class="btn btn-primary" href="{{ url('pacientes') }}"> Regresar</a>
        </div>       
            