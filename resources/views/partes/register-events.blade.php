<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Registro Eventos</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Nombre de Evento</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Nombre de Evento" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Descripción</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Descripción" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Contenido</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Contenido" class="form-control input-md" required="">
            </div>
        </div>

        <!-- date  input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Fecha</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">
            </div>
        </div>

        <!-- time initial input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Hora Inicio Evento</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="time" class="form-control input-md" required="">
            </div>
        </div>

        <!-- time final input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Hora Final Evento</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="time" class="form-control input-md" required="">
            </div>
        </div>

        <!-- State input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Estado</label>
            <select>
                <option value="Disponible">Seleccione</option>
                <option value="Disponible">Disponible</option>
                <option value="No Disponible">No Disponible</option>
            </select>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-success">Enviar</button>
                <input id="fn" name="fn" type="reset" class="btn btn-danger">
            </div>
        </div>

    </fieldset>
</form>