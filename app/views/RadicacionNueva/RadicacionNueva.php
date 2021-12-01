<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <a class="btn btn-success" style="margin-bottom:16px;" href="?inicio">Volver</a>
    </div>
    <div class="col-md-8 col-md-offset-2 text-center">
        <h3>Nueva Radicación</h3>
    </div>

    <div class="col-md-8 col-md-offset-2">


        <form class="form-horizontal" action="?radicacion/guardar" method="POST">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombresol">Nombre Solicitante</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombresol" name="nombresol"
                        placeholder="Nombre Solicitante">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fecha">Fecha</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="asunto">Asunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="texto">Texto Solicitud</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="texto" name="texto" placeholder="Texto Solicitud">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Guardar</button>
                </div>
            </div>
        </form>

    </div>
</div>