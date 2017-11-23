<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Registro Programas</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Nombre del Programa </label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Nombre del Programa" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Descripción</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Descripción" class="form-control input-md">
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