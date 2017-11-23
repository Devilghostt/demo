<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Reserva de implementos deportivos</legend>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Seleccione tipo de implemento</label>
            <div class="col-md-4">
                <select id="selectbasic" name="selectbasic" class="form-control input-md">
                    <option value="cedula de ciudadania">C.C</option>
                    <option value="tarjeta de identidad">T.I</option>
                    <option value="cedula de extranjeria">C.E</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
            </div>
        </div>


        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="selectbasic">Seleccione cantidad</label>
            <div class="col-md-4">
                <input type="number" placeholder="1">
            </div>
        </div>


        <!-- Fecha-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Fecha de préstamo</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">

            </div>
        </div>


        <!-- Fecha-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Fecha de devolución</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">

            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <a id="submit" name="submit" class="btn btn-primary" href="{{asset('')}}">Agregar</a>
                <a id="submit" name="submit" class="btn btn-primary" href="{{asset('')}}">Cancelar</a>

            </div>
        </div>

    </fieldset>
</form>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">



                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">

                                    <form role="form">
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Implementos
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-6">

                                    <form role="form">
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Fecha de préstamo
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">
                                                Fecha de devolución
                                            </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" disabled/>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
<a id="submit" name="submit" class="btn btn-primary" href="{{asset('')}}">Reservar</a>