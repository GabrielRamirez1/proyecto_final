<?php

class ControladorTarea
{

    public function TareaMostrar($idperfil)
    {
        $bdcliente = new ClienteDAO();
        $bdtarea = new TareaDAO();
        $perfilusuario = $bdcliente->ClienteBuscarID($idperfil);
        $mostrarinformacion = $bdtarea->TareaMostrar();
        require_once 'Vista/html/tareas.php';
    }

    public function TareaMostrarMisTareas($idperfil)
    {
        $bdcliente = new ClienteDAO();
        $bdtarea = new TareaDAO();
        $perfilusuario = $bdcliente->ClienteBuscarID($idperfil);
        $mostrarinformacion = $bdtarea->TareaMostrarMisTareas($idperfil);
        require_once 'Vista/html/mistareas.php';
    }

    public function TareaBuscarTareas($buscar, $idperfil)
    {
        $bdcliente = new ClienteDAO();
        $bdtarea = new TareaDAO();
        $perfilusuario = $bdcliente->ClienteBuscarID($idperfil);
        $mostrarinformacion = $bdtarea->TareaBuscarTareas($buscar, $idperfil);
        require_once 'Vista/html/mistareas.php';
    }

    public function TareaAgregar($t_titulo, $t_descripcion, $t_fechavencimiento, $t_estado, $t_fecha, $t_hora, $idperfil)
    {
        $bdtarea = new TareaDAO();
        $tarea = new Tarea(null, $idperfil, strtoupper($t_titulo), $t_descripcion, $t_fechavencimiento, $t_estado, $t_fecha, $t_hora);
        $bdtarea->TareaGuardar($tarea);
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Información!", "Tarea Agregada","success");';
        echo '}, 1000);</script>';
        $this->TareaMostrarMisTareas($idperfil);
    }

    public function TareaActualizar($t_id, $t_titulo, $t_descripcion, $t_fechavencimiento, $t_estado, $t_fecha, $t_hora, $idperfil)
    {
        $bdtarea = new TareaDAO();
        $tarea = new Tarea($t_id, $idperfil, strtoupper($t_titulo), $t_descripcion, $t_fechavencimiento, $t_estado, $t_fecha, $t_hora);
        $bdtarea->TareaActualizar($tarea);
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Información!", "Tarea Actualizada","success");';
        echo '}, 1000);</script>';
        $this->TareaMostrarMisTareas($idperfil);
    }

    public function TareaEliminar($t_id, $idperfil)
    {
        $bdtarea = new TareaDAO();
        $bdtarea->TareaElimninar($t_id);
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Información!", "Tarea Eliminada","success");';
        echo '}, 1000);</script>';
        $this->TareaMostrarMisTareas($idperfil);
    }
}
