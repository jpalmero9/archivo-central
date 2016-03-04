
         <div>
            {!!Form::label('Tipo de Ingreso:') !!}
            {!!Form::number('id_ingreso',null,['class'=>'form-control', 'placeholder'=>'Tipo ingreso'])!!}
         </div>

         <div>
            {!!Form::label('Diagnóstico:') !!}
            {!!Form::number('id_diagnostico',null,['class'=>'form-control', 'placeholder'=>'Diagnóstico'])!!}
         </div>

         <div>
            {!!Form::label('Nro. Historia:') !!}
            {!!Form::number('nro_historia',null,['class'=>'form-control', 'placeholder'=>'Nro. Historia'])!!}
         </div>

         <div>
            {!!Form::label('C.I.:') !!}
            {!!Form::text('ci_prefijo',null,['class'=>'form-control', 'placeholder'=>'Cédula de identidad'])!!}
         </div>

         <div>
            {!!Form::label('Cedula:') !!}
            {!!Form::number('ci',null,['class'=>'form-control', 'placeholder'=>'Cédula de identidad'])!!}
         </div>

         <div>
            {!!Form::label('Fecha de Ingreso:') !!}
            {!!Form::datetime('fecha_Ingreso',null,['class'=>'form-control', 'placeholder'=>'Fecha de Ingreso'])!!}
         </div>

         <div>
            {!!Form::label('Fecha de Registro:') !!}
            {!!Form::datetime('fecha_registro',null,['class'=>'form-control', 'placeholder'=>'Fecha de Registro'])!!}
         </div>

         <div>
            {!!Form::label('Nombre:') !!}
            {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre del paciente'])!!}
         </div>

         <div>
            {!!Form::label('Apellido:') !!}
            {!!Form::text('apellido',null,['class'=>'form-control', 'placeholder'=>'Apellido del paciente'])!!}
         </div>

         <div>
            {!!Form::label('Ubicación fisica:') !!}
            {!!Form::text('ubicaion_fisica',null,['class'=>'form-control', 'placeholder'=>'Ubicación fisica'])!!}
         </div>

         <div>
            {!!Form::label('Observaciones:') !!}
            {!!Form::text('Observaciones',null,['class'=>'form-control', 'placeholder'=>'Observaciones'])!!}
         </div>
