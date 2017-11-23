<form class="form-horizontal" method="post" action="{{route('registrar')}}" id="register">
    {{csrf_field()}}
    <fieldset>
        <!-- Form Name -->
        <legend style="text-align: center">Registro de cuenta</legend>
        <p style="text-align: center">Todos los campos marcados con un * son obligatorios</p>
        @if(session()->has('flash'))
            <div class="text-center alert alert-info">{{session('flash')}}</div>
        @endif
        <!-- Text input Primer Nombre-->
        <div class="form-group  {{$errors->has('primernombre')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Primer nombre *</label>
            <div class="col-md-4">
                <input id="fn" name="primernombre" type="text" placeholder="Primer nombre" class="form-control input-md" required="">
                {!! $errors->first('primernombre','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Segundo Nombre-->
        <div class="form-group {{$errors->has('segundonombre')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Segundo nombre </label>
            <div class="col-md-4">
                <input id="fn" name="segundonombre" type="text" placeholder="Segundo nombre" class="form-control input-md">
                {!! $errors->first('segundonombre','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Primer Apellido-->
        <div class="form-group {{$errors->has('primerapellido')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Primer apellido *</label>
            <div class="col-md-4">
                <input id="fn" name="primerapellido" type="text" placeholder="Primer apellido" class="form-control input-md" required="">
                {!! $errors->first('primerapellido','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Segundo Apellido-->
        <div class="form-group {{$errors->has('segundoapellido')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Segundo apellido *</label>
            <div class="col-md-4">
                <input id="fn" name="segundoapellido" type="text" placeholder="Segundo apellido" class="form-control input-md" >
                {!! $errors->first('segundoapellido','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Select Basic Genero-->
        <div class="form-group ">
            <label class="col-md-4 control-label" for="selectbasic">genero *</label>
            <div class="col-md-4">
                <select id="selectbasic" name="generos_id" class="form-control input-md">
                    <option value="">Seleccione el Genero</option>
                    @foreach($Gen as $value)
                    <option value="{{$value->id}}">{{$value->genero}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <!-- Select Basic Tipo de Documento-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">tipo de documento *</label>
            <div class="col-md-4">
                <select id="selectbasic" name="tipo_documentos_id" class="form-control input-md">
                    <option value="">Seleccione el Documento</option>
                    @foreach($Documento as $value)
                    <option value="{{$value->id}}">{{$value->descripcion}}</option>
                        @endforeach

                </select>
            </div>
        </div>
        <!-- Text input Documento-->
        <div class="form-group {{$errors->has('documento')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="phone">Numero de documento *</label>
            <div class="col-md-4">
                <input id="phone" name="documento" type="text" placeholder="Numero de documento" class="form-control input-md" required="">
                {!! $errors->first('documento','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Correo-->
        <div class="form-group {{$errors->has('correo')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="email">Email *</label>
            <div class="col-md-4">
                <input id="email" name="correo" type="text" placeholder="Email" class="form-control input-md" required="">
                {!! $errors->first('correo','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Correo 2-->
        <div class="form-group {{$errors->has('correo2')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="email">Confirmar Email *</label>
            <div class="col-md-4">
                <input id="email" name="correo2" type="text" placeholder="Confirmar Email" class="form-control input-md" required="">
                {!! $errors->first('correo2','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Usuario-->
        <div class="form-group {{$errors->has('usuario')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="email">Usuario *</label>
            <div class="col-md-4">
                <input id="email" name="usuario" type="text" placeholder="Usuario" class="form-control input-md" required="">
                {!! $errors->first('usuario','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Password-->
        <div class="form-group  {{$errors->has('password')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Contraseña *</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md" required="">
                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Password 2-->
        <div class="form-group {{$errors->has('password2')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Confirmar contraseña *</label>
            <div class="col-md-4">
                <input id="password2" name="password2" type="password" placeholder="Confirmar contraseña" class="form-control input-md" required="">
                {!! $errors->first('password2','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Telefono-->
        <div class="form-group {{$errors->has('telefono')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Teléfono *</label>
            <div class="col-md-4">
                <input id="fn" name="telefono" type="text" placeholder="Teléfono" class="form-control input-md" required="">
                {!! $errors->first('telefono','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Text input Direccion-->
        <div class="form-group {{$errors->has('direccion')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Dirección residencia *</label>
            <div class="col-md-4">
                <input id="fn" name="direccion" type="text" placeholder="Dirección residencia" class="form-control input-md" required="">
                {!! $errors->first('direccion','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Fecha -->
        <div class="form-group {{$errors->has('fechadenacimiento')?'has-error': ''}}">
            <label class="col-md-4 control-label" for="fn">Fecha de nacimiento *</label>
            <div class="col-md-4">
                <input id="fn" name="fechadenacimiento" type="date" class="form-control input-md" required="">
                {!! $errors->first('fechadenacimiento','<span class="help-block">:message</span>') !!}
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Registrar</button>
                <input id="fn" name="fn" type="reset" class="btn btn-primary">
            </div>
        </div>

    </fieldset>
</form>

@section('script')
    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
@endsection