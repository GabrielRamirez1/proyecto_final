<?php

session_start();

date_default_timezone_set('America/Mexico_City');
$fechasistema = date("Y-m-d");
$horasistema = date("H:i:s");

require_once 'Configuracion/ConexionPDO.php';


require_once 'Modelo/Cliente.php';
require_once 'Modelo/ClienteDAO.php';
require_once 'Controlador/ControladorCliente.php';
$ControladorCliente = new ControladorCliente();

require_once 'Modelo/Tarea.php';
require_once 'Modelo/TareaDAO.php';
require_once 'Controlador/ControladorTarea.php';

$ControladorTarea = new ControladorTarea();


require_once 'Controlador/ControladorPagina.php';
$ControladorPagina = new ControladorPagina();

if (isset($_GET["accion"])) {

    if ($_GET["accion"] == "login") {
        $ControladorCliente->Login($_POST["c_identificacion"], $_POST["c_contrasena"]);
    } elseif ($_GET["accion"] == "index") {
        $ControladorPagina->Index();
    } elseif ($_GET["accion"] == "registrate") {
        $ControladorPagina->Registrate();
    } elseif ($_GET["accion"] == "registrarme") {
        $ControladorCliente->ClienteAgregar($_POST["c_identificacion"], $_POST["c_nombres"], $_POST["c_apellidos"], $_POST["c_celular"], $_POST["c_correo"], $_POST["c_contrasena"], $_POST["c_rol"]);
    } 

    $idperfil = 0;
    if (isset($_SESSION['permitido']) == true) {
        $idperfil = $_SESSION['usuario'];
        // ACCESO DE ACUERDO AL RON 
        if ($_GET["accion"] == "inicio") {
            $ControladorCliente->cargaInicio($idperfil);
        }

        if ($_GET["accion"] == "cliente") {
            $ControladorCliente->ClientesMostrar($idperfil);
        } elseif ($_GET["accion"] == "clienteactualizar") {
            $ControladorCliente->ClienteActualizar($_POST["c_id"], $_POST["c_identificacion"], $_POST["c_identificacionvieja"], $_POST["c_nombres"], $_POST["c_apellidos"], $_POST["c_celular"], $_POST["c_correo"], $_POST["c_contrasena"], $idperfil);
        }

        // MIS TAREAS
        if ($_GET["accion"] == "tareaguardar") {
            $ControladorTarea->TareaAgregar($_POST["t_titulo"], $_POST["t_descripcion"], $_POST["t_fechavencimiento"], $_POST["t_estado"], $fechasistema, $horasistema, $idperfil);
        } elseif ($_GET["accion"] == "tareaactualizar") {
            $ControladorTarea->TareaActualizar($_POST["t_id"], $_POST["t_titulo"], $_POST["t_descripcion"], $_POST["t_fechavencimiento"], $_POST["t_estado"], $fechasistema, $horasistema, $idperfil);
        } elseif ($_GET["accion"] == "tareaeliminar") {
            $ControladorTarea->TareaEliminar($_POST["t_id"], $idperfil);
        } elseif ($_GET["accion"] == "mistareas") {
            $ControladorTarea->TareaMostrarMisTareas($idperfil);
        }  elseif ($_GET["accion"] == "buscartareas") {
            $ControladorTarea->TareaBuscarTareas($_POST["t_buscar"], $idperfil);
        }elseif ($_GET["accion"] == "tareas") {
            $ControladorTarea->TareaMostrar($idperfil);
        }




        if ($_GET["accion"] == "salir") {
            $_SESSION = array();  //Destruir todas las variables de sesi�n que hallan sido 
            session_destroy();
            $ControladorPagina->Index();
        }
    } else {
        $_SESSION = array();  //Destruir todas las variables de sesi�n que hallan sido 
        session_destroy();
    }
} else {

    $ControladorPagina->Index();
}
