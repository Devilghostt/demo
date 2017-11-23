<h1>Afiliados a la Junta de Accion Comunal</h1>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Consultar Afiliados</legend>
        <!-- text input -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Nombre</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Curso" class="form-control input-md" required="">
            </div>
        </div>

        <!-- document input -->
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
    <h2>Resultados</h2>
    <thead>

    <th><input type="checkbox" id="checkall"></th>
    <th>Nombre</th>
    <th>Documento</th>
    <th>Editar</th>
    <th>Eliminar</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
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