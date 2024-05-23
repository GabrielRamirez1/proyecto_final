<?php
date_default_timezone_set('America/Mexico_City');
$fechasistema = date("Y-m-d");
$horasistema = date("H:i:s");
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Vista/bootstrap/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script type="text/javascript" src="Vista/js/jquery-3.6.0.min.js"></script>
        <link rel="shortcut icon" href="Vista/imagen/icono.png">
        <script src="Vista/jquery/jquery-ui.js" type="text/javascript"></script>
        <link href="Vista/jquery/jquery-ui.min.css" rel="stylesheet" type="text/css"/>       
        <link href="Vista/fontawesome/css/all.css" rel="stylesheet" />
        <script src="Vista/fontawesome/js/all.js" crossorigin="anonymous"></script>
        <link href="Vista/css/styles.css" rel="stylesheet" />
        <script src="Vista/js/sweetalert.min.js" type="text/javascript"></script>        
        <title>Gestión Tarea</title>
    </head>
  
    <body>

        <!--REGISTRAR-->

        <div class="modal fade" id="registrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h6 class="modal-title">REGISTRO DE USUARIO</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form ROLE="FORM" METHOD="POST" ACTION="index.php?accion=registrarme">
                            <div class="mb-3">
                                <label for="data" class="form-label">Identificación:</label>
                                <input type="number" class="form-control form-control-sm" id="c_identificacion" name="c_identificacion" placeholder="Ingrese información" required>
                            </div>
                            <div class="mb-3">
                                <label for="data" class="form-label">Nombres:</label>
                                <input type="text" class="form-control form-control-sm" id="c_nombres" name="c_nombres" placeholder="Ingrese información" required>
                            </div>
                             <div class="mb-3">
                                <label for="data" class="form-label">Aapellidos::</label>
                                <input type="text" class="form-control form-control-sm" id="c_apellidos" name="c_apellidos" placeholder="Ingrese información" required>
                            </div>
                            <div class="mb-3">
                                <label for="data" class="form-label">Celular:</label>
                                <input type="number" class="form-control form-control-sm" id="c_celular" name="c_celular" placeholder="Ingrese información" required>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Email:</label>
                                <input type="email" class="form-control form-control-sm" id="c_correo" name="c_correo" placeholder="Ingrese información" required>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control form-control-sm" id="c_contrasena" name="c_contrasena" placeholder="Ingrese información" required>
                                <input type="hidden" class="form-control form-control-sm" id="c_rol" name="c_rol" value="2">

                            </div>
                           
                            <center><button type="submit" class="btn btn-dark btn-sm">Registrarme&nbsp; &nbsp; <i class="fa-solid fa-floppy-disk"></i></button></center>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

