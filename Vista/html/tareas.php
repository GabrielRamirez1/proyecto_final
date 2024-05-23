<?php include_once 'header.php'; ?>
<?php
$titulo = 'TODAS LAS TAREAS';
?>

<?php include_once 'menu.php'; ?>
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa-solid fa-circle-info"></i>&nbsp; <strong><?php echo $titulopagina ?> - <?php echo $titulo; ?>
            </strong>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="display table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Fecha Vencimiento</th>
                        <th>Fecha ingreso</th>
                        <th>Hora ingreso</th>
                        <th>Estado</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($mostrarinformacion)) {
                        foreach ($mostrarinformacion as $dato) {
                            ?>
                            <tr>
                                <td><?php echo $dato["c_nombres"]." ".$dato["c_apellidos"] ?></td>

                                <td><?php echo $dato["t_titulo"] ?></td>
                                <td><?php echo $dato["t_descripcion"] ?></td>
                                <td style="text-align: right;"><?php echo $dato["t_fechavencimiento"] ?></td>
                                <td style="text-align: right;"><?php echo $dato["t_fecha"] ?></td>
                                <td style="text-align: right;"><?php echo $dato["t_hora"] ?></td>
                                <?php if ($dato["t_estado"] == 'NO REALIZADO') { ?>
                                    <td style="color:red; font-weight: bold; text-align: center;">NO REALIZADO</td>
                                <?php } elseif ($dato["t_estado"] == 'REALIZADO') { ?>
                                    <td style="color:green; font-weight: bold; text-align: center;">REALIZADO</td>
                                <?php } ?>

                        </tr>
                        <?php
                    }
                }
                ?>

                </tbody>
            </table>   

        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>

<script src="Vista/js/script.js" crossorigin="anonymous"></script>
<script src="Vista/js/simple-datatables.js" crossorigin="anonymous"></script>