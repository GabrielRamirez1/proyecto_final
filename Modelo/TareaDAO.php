<?php

class TareaDAO
{

    public function TareaMostrar()
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $sql = "SELECT * FROM tarea, cliente WHERE t_clienteFK = c_id ORDER BY t_id DESC;";
        $resultado = $conexion->obtenerTodos($sql);
        $conexion->Desconectar();
        return $resultado;
    }

    public function TareaMostrarMisTareas($id)
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $sql = "SELECT * FROM tarea WHERE t_clienteFK = '$id' ORDER BY t_id DESC;";
        $resultado = $conexion->obtenerTodos($sql);
        $conexion->Desconectar();
        return $resultado;
    }

    public function TareaBuscarTareas($buscar, $id)
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $sql = "SELECT * FROM tarea WHERE t_titulo LIKE '%$buscar%' AND t_clienteFK = '$id' ORDER BY t_id DESC;";
        $resultado = $conexion->obtenerTodos($sql);
        $conexion->Desconectar();
        return $resultado;
    }
    public function TareaBuscarID($id)
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $sql = "SELECT * FROM tarea WHERE t_id = $id ";
        $resultado = $conexion->consultarRegistro($sql);
        $conexion->Desconectar();
        return $resultado;
    }

    public function TareaGuardar(Tarea $dato)
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $t_id = $dato->getT_id();
        $t_clienteFK = $dato->getT_clienteFK();
        $t_titulo = $dato->getT_titulo();
        $t_descripcion = $dato->getT_descripcion();
        $t_fechavencimiento = $dato->getT_fechavencimiento();
        $t_estado = $dato->getT_estado();
        $t_fecha = $dato->getT_fecha();
        $t_hora = $dato->getT_hora();
        $sql = "INSERT INTO tarea VALUES (null, '$t_clienteFK', '$t_titulo', '$t_descripcion', '$t_fechavencimiento', '$t_estado', '$t_fecha','$t_hora')";
        $resultado = $conexion->InsActElim($sql);
        $conexion->Desconectar();
        return $resultado;
    }

    public function TareaActualizar(Tarea $dato)
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $t_id = $dato->getT_id();
        $t_clienteFK = $dato->getT_clienteFK();
        $t_titulo = $dato->getT_titulo();
        $t_descripcion = $dato->getT_descripcion();
        $t_fechavencimiento = $dato->getT_fechavencimiento();
        $t_estado = $dato->getT_estado();
        $t_fecha = $dato->getT_fecha();
        $t_hora = $dato->getT_hora();
        $sql = "UPDATE tarea SET t_clienteFK = '$t_clienteFK', t_titulo = '$t_titulo', t_descripcion = '$t_descripcion', t_fechavencimiento = '$t_fechavencimiento', t_estado = '$t_estado', t_fecha = '$t_fecha',t_hora = '$t_hora' WHERE t_id = '$t_id'";
        $resultado = $conexion->InsActElim($sql);
        $conexion->Desconectar();
        return $resultado;
    }

    function TareaElimninar($id)
    {
        $conexion = new ConexionPDO();
        $conexion->Conectar();
        $sql = "DELETE FROM tarea WHERE t_id = $id "; // eliminar del carrito
        $resultado = $conexion->InsActElim($sql);
        $conexion->Desconectar();
        return $resultado;
    }
}
