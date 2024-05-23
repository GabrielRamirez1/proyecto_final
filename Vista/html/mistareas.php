<?php include_once 'header.php'; ?>
<?php
$titulo = 'MIS TAREAS';
?>

<?php include_once 'menu.php'; ?>
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="row">
                <div class="col-6">
                    <i class="fa-solid fa-circle-info"></i>&nbsp;<?php echo $titulo; ?>
                    &nbsp; <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#agregar">
                        <strong>Nuevo&nbsp; <i class="fa-solid fa-plus"></i></strong>
                    </button>
                    </strong>
                </div>
                <div class="col-6">
                    <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=buscartareas" data-form="save">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" name="t_buscar" placeholder="Ingrese información">
                            <button type="submit" class="btn btn-dark btn-sm"><i class="fa-solid fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title">NUEVO REGISTRO DEL <?php echo $titulo; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=tareaguardar" data-form="save" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="data" class="form-label">Titulo:</label>
                                        <input type="text" class="form-control form-control-sm" id="t_titulo" name="t_titulo" placeholder="Ingrese información" required>
                                        <input type="hidden" class="form-control form-control-sm" id="t_estado" name="t_estado" value="NO REALIZADO">

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="data" class="form-label">Descripción:</label>
                                        <textarea class="form-control" name="t_descripcion" id="t_descripcion" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="data" class="form-label">Fecha Vencimiento:</label>
                                        <input type="date" class="form-control form-control-sm" id="t_fechavencimiento" name="t_fechavencimiento" placeholder="Ingrese información" required>
                                    </div>
                                </div>

                            </div>
                            <center><button type="submit" class="btn btn-dark btn-sm">Guardar&nbsp; &nbsp; <i class="fa-solid fa-floppy-disk"></i></button></center>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card-body">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php
                if (!empty($mostrarinformacion)) {
                    foreach ($mostrarinformacion as $dato) {
                ?>
                        <div class="accordion-item">
                            <?php if ($dato["t_estado"] == 'NO REALIZADO') { ?>
                                <h2 class="accordion-header" id="flush-heading<?php echo $dato["t_id"]; ?>">
                                    <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $dato["t_id"]; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong><?php echo $dato["t_titulo"] ?></strong>
                                    </button>
                                </h2>
                            <?php } elseif ($dato["t_estado"] == 'REALIZADO') { ?>
                                <h2 class="accordion-header" id="flush-heading<?php echo $dato["t_id"]; ?>">
                                    <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $dato["t_id"]; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong><?php echo $dato["t_titulo"] ?></strong>
                                    </button>
                                </h2>
                            <?php } ?>

                            <div id="flush-collapse<?php echo $dato["t_id"]; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $dato["t_id"]; ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php echo $dato["t_descripcion"] ?>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <center><span>Fecha Vencimiento : <strong><?php echo $dato["t_fechavencimiento"] ?></strong></span></center>
                                    </div>
                                    <div class="col-4">
                                        <center><span>Fecha Registro : <strong><?php echo $dato["t_fecha"] ?></strong></span></center>
                                    </div>
                                    <div class="col-4">
                                        <center><span>Hora Registro : <strong><?php echo $dato["t_fecha"] ?></strong></span></center>
                                    </div>
                                </div>
                                <br>
                                <!--ACTUALIZAR-->
                                <div class="row">
                                    <div class="col-6">

                                        <center> <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#Actualizar<?php echo $dato["t_id"]; ?>">
                                                <i class="fa-solid fa-pencil fa-2x"></i>
                                            </button></center>
                                        <div class="modal fade" id="Actualizar<?php echo $dato["t_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h6 class="modal-title">ACTUALIZAR DATO DEL <?php echo $titulo; ?></h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=tareaactualizar" data-form="save" enctype="multipart/form-data">
                                                            <input type="hidden" id="t_id" name="t_id" value="<?php echo $dato["t_id"]; ?>" required>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="data" class="form-label">Titulo:</label>
                                                                        <input type="text" class="form-control form-control-sm" id="t_titulo" name="t_titulo" value="<?php echo $dato["t_titulo"]; ?>" placeholder="Ingrese información" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="data" class="form-label">Descripción:</label>
                                                                        <textarea class="form-control" name="t_descripcion" id="p_descripcion" rows="3" value="<?php echo $dato["t_descripcion"]; ?>" required><?php echo $dato["t_descripcion"]; ?></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="data" class="form-label">Categoria: </label>
                                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="t_estado" id="t_estado">
                                                                            <?php
                                                                            $estadoac = array("NO REALIZADO", "REALIZADO");
                                                                            foreach ($estadoac as $i => $valor) {
                                                                                if ($estadoac[$i] == $dato['t_estado']) {
                                                                            ?>
                                                                                    <option value="<?php echo $estadoac[$i] ?>" selected>
                                                                                        <?php echo $estadoac[$i] ?>
                                                                                    </option>
                                                                                <?php
                                                                                } else {
                                                                                ?>
                                                                                    <option value="<?php echo $estadoac[$i] ?>">
                                                                                        <?php echo $estadoac[$i] ?>
                                                                                    </option>
                                                                            <?php
                                                                                }
                                                                            }
                                                                            ?>

                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label for="data" class="form-label">Fecha Vencimiento:</label>
                                                                        <input type="date" class="form-control form-control-sm" id="t_fechavencimiento" name="t_fechavencimiento" placeholder="Ingrese información" value="<?php echo $dato["t_fechavencimiento"]; ?>" required>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <center><button type="submit" class="btn btn-dark btn-sm">Actualizar&nbsp; &nbsp; <i class="fa-solid fa-floppy-disk"></i></button></center>
                                                        </form>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--ELIMIAR-->
                                    <div class="col-6">
                                        <center> <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Eliminar<?php echo $dato["t_id"]; ?>">
                                                <i class="fa-solid fa-trash-can fa-2x"></i>
                                            </button></center>
                                        <div class="modal fade" id="Eliminar<?php echo $dato["t_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary text-white">
                                                        <h6 class="modal-title">ELIMINAR DATO DEL <?php echo $titulo; ?></h6>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=tareaeliminar">
                                                            <input type="hidden" class="form-control" id="t_id" name="t_id" value="<?php echo $dato["t_id"] ?>" />
                                                            <h6>¿Desea eliminar la información?</h6>
                                                            <center><button type="submit" class="btn btn-dark btn-sm">Eliminar&nbsp; &nbsp; <i class="fa-solid fa-floppy-disk"></i></button></center>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>


                <?php
                    }
                } ?>
            </div>

        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>

<script src="Vista/js/script.js" crossorigin="anonymous"></script>
<script src="Vista/js/simple-datatables.js" crossorigin="anonymous"></script>