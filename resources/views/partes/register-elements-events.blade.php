<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Registro Elementos para Eventos</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Nombre del Elemento</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Nombre del Elemento" class="form-control input-md" required="">
            </div>
        </div>

        <!-- date initial input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Fecha Reserva</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Tamaño</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Tamaño" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Descripción</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Descripción" class="form-control input-md" required="">
            </div>
        </div>

        <!-- unit value input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Valor Unitario</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="number" placeholder="Valor Unitario" class="form-control input-md" required="">
            </div>
        </div>

        <!-- State input-->
        <div class="form-group">
            <label class="col-md-4 control-label" placeholder="Seleccione" for="fn">Estado del Elemento</label>
            <select>
                <option value="Disponible">Seleccione</option>
                <option value="Disponible">Disponible</option>
                <option value="No Disponible">No Disponible</option>
            </select>
        </div>

        <!-- time initial input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Cantidad</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="number" placeholder="Seleccione" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Value input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Valor Unitario del Alquiler</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="number" placeholder="Valor" class="form-control input-md" required="">
            </div>
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