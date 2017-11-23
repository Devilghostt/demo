<h1 style="text-align: center">Alquiler de elementos para eventos</h1>
<form class="form-vertical">


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <legend style="text-align: center">Consultar Reserva</legend>
                                <form role="form" class="form-inline">
                                    <div class="col-md-4">


                                        <label for="exampleInputEmail1">
                                            Documento
                                        </label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" />
                                    </div>
                                    <div class="col-md-4" id="fdr">

                                        <label for="exampleInputPassword1">
                                            Fecha reserva
                                        </label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" />
                                    </div>
                                    <br>
                                    <!-- Button -->
                                    <div class="col-md-8" id="fds">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="fgt" name="search" type="search" class="btn btn-success">Consultar</button>
                                            <button id="fgt"     name="Listar Todo" type="search" class="btn btn-danger">Listar Todo</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--  -->


<table id="mytable" class="table table-bordred table-striped">

    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th>Codigo Reserva</th>
    <th>Documento</th>
    <th>Elementos a Prestar</th>
    <th>Cambiar estado</th>
    <th>Valor a pagar</th>
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