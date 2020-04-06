<div class="form-group">

<label for="nombre" class="control-label">{{'Nombres'}}</label>
        <input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" 
                name="nombre" id="nombre" 
                value="{{isset($doctor->nombre)?$doctor->nombre:old('nombre') }}">
                        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
</div>
               
        <div class="form-group">
                <label for="apellido" class="control-label">{{'Apellidos'}}</label>
                        <input type="text" class="form-control {{$errors->has('apellido')?'is-invalid':''}}"
                         name="apellido" id="apellido" 
                                 value="{{isset($doctor->apellido)?$doctor->apellido:old('apellido') }}">
                                        {!! $errors->first('apellido','<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                <label for="NombreE" class="control-label">{{'Especialidad'}}</label>
                        <input type="text" class="form-control {{$errors->has('NombreE')?'is-invalid':''}}"
                         name="NombreE" id="NombreE" 
                                 value="{{isset($doctor->NombreE)?$doctor->NombreE:old('NombreE') }}">
                                        {!! $errors->first('NombreE','<div class="invalid-feedback">:message</div>') !!}
        </div>

<div class="form-group">
                <label for="cargo" class="control-label">{{'Cargo'}}</label>
                        <input type="text" class="form-control {{$errors->has('cargo')?'is-invalid':''}}"
                         name="cargo" id="cargo" 
                                 value="{{isset($doctor->cargo)?$doctor->cargo:old('cargo') }}">
                                        {!! $errors->first('cargo','<div class="invalid-feedback">:message</div>') !!}
        </div>       

  <div class="form-group">
                <label for="observaciones" class="control-label">{{'Observaciones'}}</label>
                        <input type="text" class="form-control {{$errors->has('observaciones')?'is-invalid':''}}"
                         name="observaciones" id="observaciones" 
                                value="{{isset($doctor->observaciones)?$doctor->observaciones:old('observaciones') }}">
                                         {!! $errors->first('observaciones','<div class="invalid-feedback">:message</div>') !!}
                                         
  </div>   
      
               
      
                        </br> 
                  
          
     
         <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

         <a class="btn btn-primary" href="{{ url('doctores') }}"> Regresar</a>
        </div>  
                
            