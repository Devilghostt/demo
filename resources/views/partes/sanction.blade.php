<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Asociar Sanción</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Nombre Completo</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Nombre Completo" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Documento</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="number" placeholder="Documento" class="form-control input-md">
            </div>
        </div>

        <!--  input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Multa a pagar</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="number" class="form-control input-md" required="">
            </div>
        </div>

        <!-- date sanction input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Tiempo de Sanción</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="date" class="form-control input-md" required="">
            </div>
        </div>

        <!--  input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Observaciones</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-success">Registrar</button>
                <input id="fn" name="fn" type="reset" class="btn btn-danger">
            </div>
        </div>

    </fieldset>
</form>