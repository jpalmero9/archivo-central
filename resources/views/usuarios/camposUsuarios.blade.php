
         <div>
            {!!Form::label('Nombre:') !!}
            {!!Form::text('identNombre',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
         </div>

         <div>
            {!!Form::label('Apellido:') !!}
            {!!Form::text('identApellido',null,['class'=>'form-control', 'placeholder'=>'Apellido'])!!}
         </div>

         <div>
            {!!Form::label('correo:') !!}
            {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'correo'])!!}
         </div>

         <div>
            {!!Form::label('Nombre de usuario:') !!}
            {!!Form::text('nombreUsuario',null,['class'=>'form-control', 'placeholder'=>'nombre de usuario'])!!}
         </div>
         <div>
            {!!Form::label('Clave:') !!}
            {!!Form::password('claveUsuario',['class'=>'form-control', 'placeholder'=>'Clave'])!!}
         </div>
         <div>
            {!!Form::label('Categoría:') !!}
            {!!Form::text('categoria',null,['class'=>'form-control', 'placeholder'=>'Categoría'])!!}
         </div>

