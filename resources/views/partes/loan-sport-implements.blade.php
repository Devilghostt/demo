
<h1>Préstamo de Implementos Deportivos</h1>
<form class="form-vertical">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Consultar Reserva</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Documento</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="number" placeholder="Documento" class="form-control input-md" required="">
            </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="search" type="search" class="btn btn-success">Consultar</button>
                <button id="fn" name="Listar Todo" type="search" class="btn btn-danger">Listar Todo</button>
            </div>
        </div>
    </fieldset>
</form>

<table id="mytable" class="table table-bordred table-striped">

    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th>Codigo Reserva</th>
    <th>Documento</th>
    <th>Implementos a Prestar</th>
    <th>Cambiar Estado</th>
    <th>Asociar Sanción</th>
    <th>Cancelar</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Asociar Sanción"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-exclamation-sign"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Asociar Sanción"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-exclamation-sign"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Asociar Sanción"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-exclamation-sign"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Asociar Sanción"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-exclamation-sign"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Asociar Sanción"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-exclamation-sign"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    </tbody>
</table>
<script>
$(document).ready(function(){
$("#mytable #checkall").click(function () {
if ($("#mytable #checkall").is(':checked')) {
$("#mytable input[type=checkbox]").each(function () {
$(this).prop("checked", true);
});

} else {
$("#mytable input[type=checkbox]").each(function () {
$(this).prop("checked", false);
});
}
});

$("[data-toggle=tooltip]").tooltip();
});
</script>