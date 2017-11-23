    <h1>Implementos Deportivos</h1>
<!-- State input-->
    <div class="form-group">
        <label class="col-md-4 control-label" placeholder="Seleccione" for="fn">Estado del Elemento</label>
        <select>
            <option value="Disponible">Seleccione</option>
            <option value="Disponible">Balones</option>
            <option value="No Disponible">Listar Todo</option>
        </select>
    </div>
    <table id="mytable" class="table table-bordred table-striped">
    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th>Referencia</th>
    <th>Implemento</th>
    <th>Cantidad Total</th>
    <th>Editar</th>
    <th>Eliminar</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
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