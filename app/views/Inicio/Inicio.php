<?php //include(PATH_VIEWS . 'Menu/Lateral.php');?>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        responsive: true
    });

    new $.fn.dataTable.FixedHeader(table);
});
</script>

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <a class="btn btn-success" style="margin-bottom:16px;" href="?radicacion/nueva"
            >Nueva Radicación</a>
            <a class="btn btn-success" style="margin-bottom:16px;" href="?inicio/salir"
            >Salir</a>

    </div>
    <div class="col-md-10 col-md-offset-1">
        <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre solicitante</th>
                    <th>Fecha</th>
                    <th>Asunto</th>
                    <th>Teto Solicitud</th>
                    <th>Usuario crea</th>
                    <th>Fecha crea</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($radicaciones as $key => $value) {
                        # code...
                        ?>
                <tr>
                    <td><?= $value['id']?></td>
                    <td><?= $value['nombre_solicitante']?></td>
                    <td><?= $value['fecha']?></td>
                    <td><?= $value['asunto']?></td>
                    <td><?= $value['texto_solicitud']?></td>
                    <td><?= $value['nombre']?></td>
                    <td><?= $value['fecha_crea']?></td>
                    <td><a class="btn btn-success" style="margin-bottom:16px;" href="?radicacion/editar/<?php echo $value['id'];?>">Editar Radicación</a></td>
                </tr>

                <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>
</div>