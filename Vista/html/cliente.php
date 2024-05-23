<?php include_once 'header.php'; ?>
<?php
$titulo = 'CLIENTE';
?>
<?php include_once 'menu.php'; ?>
<div class="container">

    <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fa-solid fa-circle-info"></i>&nbsp; <strong><?php echo $titulopagina ?> - <?php echo $titulo; ?>            </strong>
        </div>
        <div class="card-body">



            <table id="datatablesSimple" class="display table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Identificación</th>
                        <th>Nomnres y Apellidos</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Rol</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 1;
                    if (!empty($mostrarinformacion)) {
                        foreach ($mostrarinformacion as $dato) {
                            ?>
                            <tr>
                                <td><?php echo $contador; ?></td>
                                <td><?php echo $dato["c_identificacion"]; ?></td>
                                <td><?php echo $dato["c_nombres"]." ".$dato["c_apellidos"]; ?></td>
                                <td><?php echo $dato["c_celular"]; ?></td>
                                <td><?php echo $dato["c_correo"]; ?></td>
                                <?php if ($dato["c_rol"] == 1) { ?>
                                    <td>ADMINISTRADOR</td>
                                <?php } elseif ($dato["c_rol"] == 2) { ?>
                                    <td>CLIENTE</td>
                                <?php } ?>
                            </tr>
                            <?php
                            $contador = $contador + 1;

                        }
                        
                    }
                    ?>

                </tbody>
            </table>                
        </div>

    </div
</div>

<?php include_once 'footer.php'; ?>

<script src="Vista/js/script.js" crossorigin="anonymous"></script>
<script src="Vista/js/simple-datatables.js" crossorigin="anonymous"></script>