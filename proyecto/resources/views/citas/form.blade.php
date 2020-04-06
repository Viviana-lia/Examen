
          


<div class="form-group">

<label for="fecha" class="control-label">{{'Fecha'}}</label>
        <input type="text" class="form-control {{$errors->has('fecha')?'is-invalid':''}}" 
                name="fecha" id="fecha" 
                value="{{isset($cita->fecha)?$cita->fecha:old('fecha') }}">
                        {!! $errors->first('fecha','<div class="invalid-feedback">:message</div>') !!}
</div>
               
        <div class="form-group">
                <label for="hora" class="control-label">{{'Hora'}}</label>
                        <input type="text" class="form-control {{$errors->has('hora')?'is-invalid':''}}"
                         name="hora" id="hora" 
                                 value="{{isset($cita->hora)?$cita->hora:old('hora') }}">
                                        {!! $errors->first('hora','<div class="invalid-feedback">:message</div>') !!}
        </div>
</br>
                        
        

        <div class="form-group">
        <label for="">Paciente</label>
                         <select name="paciente_id" id="inputpaciente_id" class="form-control {{$errors->has('paciente_id')?'is-invalid':''}}">
                                <option value="{{isset($cita->paciente_id)?$cita->paciente_id:old('paciente_id') }}"
                                >-- Escoja un Paciente --</option>   
                                @foreach ($pacientes as $paciente)
                                <option value="{{ $paciente['id']}}"> {{$paciente ['nombres']}} {{$paciente ['apellidos']}}</option>
                                @endforeach
                                

                                </select> 

                </div>
        </br>

        <div class="form-group">
        <label for="">Doctores</label>
                         <select name="doctor_id" id="inputdoctor_id" class="form-control {{$errors->has('doctor_id')?'is-invalid':''}}">
                                <option value="{{isset($cita->doctor_id)?$cita->doctor_id:old('doctor_id') }}"
                                >-- Escoja un Doctor --</option>   
                                @foreach ($doctores as $doctor)
                                <option value="{{ $doctor['id']}}"> {{$doctor ['nombre']}} {{$doctor ['apellido']}}</option>
                                @endforeach
                                

                                </select> 

                </div>
        </br>

        <div class="form-group">
        <label for="">Especialidad</label>
                         <select name="especialidad" id="inputdoctor_id" class="form-control {{$errors->has('doctor_id')?'is-invalid':''}}">
                                <option value="{{isset($cita->doctor_id)?$cita->doctor_id:old('doctor_id') }}"
                                >-- Escoja una Especialidad --</option>   
                                @foreach ($doctores as $doctor)
                                <option value="{{ $doctor['id']}}"> {{$doctor ['NombreE']}} </option>
                                @endforeach
                                

                                </select> 

                </div>
        </br>
        <div class="form-group">
                <label for="estado" class="control-label">{{'Estado'}}</label>
                        <input type="text" class="form-control {{$errors->has('estado')?'is-invalid':''}}"
                         name="estado" id="estado" 
                                value="{{isset($cita->estado)?$cita->estado:old('estado') }}">
                                         {!! $errors->first('estado','<div class="invalid-feedback">:message</div>') !!}
        </div>  


                                
        <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

                   <a class="btn btn-primary" href="{{ url('citas') }}"> Regresar</a>
            
            