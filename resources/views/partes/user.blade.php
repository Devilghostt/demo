<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="panel-title">BIENVENIDO: {{auth()->user()->usuario}}</h1>
            <form action="{{route('logaut')}}" method="post">
                {{csrf_field()}}
                <button class="btn btn-primary btn-xs">CERRAR SECCION</button>

            </form>

        </div>

    </div>
</div>