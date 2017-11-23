<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="jumbotron">

                <form class="form-horizontal" method="post" action="{{route('login')}}"><!----Ruta de la funcion del controlador---->
                    {{csrf_field()}} <!----Obligatiorio en todos los formularios para que no caduque la seccion---->
                    <fieldset>
                        <h2 style="text-align: center">Iniciar sesión</h2>

                        <br>

                        <div class="form-group {{$errors->has('usuario')?'has-error': ''}}"><!----Indicador de errores--->
                            <label class="col-md-2 control-label" for="fn"></label>
                            <div class="col-md-8">
                                <input id="fn" name="Usuario" type="text" placeholder="Usuario" class="form-control input-md" required="">
                                {!! $errors->first('usuario','<span class="help-block">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group {{$errors->has('password')?'has-error': ''}}"><!----Indicador de errores--->
                            <label class="col-md-2 control-label" for="fn"></label>
                            <div class="col-md-8">
                                <input id="fn" name="password" type="password" placeholder="Contraseña" class="form-control input-md" required="">
                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <br>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="submit"></label>
                            <div class="col-md-8">
                                <button id="submit" name="submit" class="btn btn-primary btn-block">Enviar</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4" for="fn"></label>
                            <div class="col-md-7">
                                <a id="jlj" href="{{asset('recuperar')}}">¿Olvidó su contraseña?</a>

                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>