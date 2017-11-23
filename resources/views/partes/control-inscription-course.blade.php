<h1>Control Incripciones a Cursos</h1>
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend style="text-align: center">Consultar Inscripción</legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Curso</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Curso" class="form-control input-md" required="">
                <button id="submit" name="search" type="search" class="btn btn-success">Consultar</button>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="fn">Nombre</label>
            <div class="col-md-4">
                <input id="fn" name="fn" type="text" placeholder="Nombre" class="form-control input-md" required="">
            </div>
        </div>
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
    <h2>Resultados</h2>
    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th>Curso</th>
    <th>Nombre</th>
    <th>Documento</th>
    <th>Cambiar Estado</th>
    <th>Cancelar</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
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