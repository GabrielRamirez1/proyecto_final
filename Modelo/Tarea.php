<?php

class Tarea
{

    private $t_id;
    private $t_clienteFK;
    private $t_titulo;
    private $t_descripcion;
    private $t_fechavencimiento;
    private $t_estado;
    private $t_fecha;
    private $t_hora;

    function __construct($t_id, $t_clienteFK, $t_titulo, $t_descripcion, $t_fechavencimiento, $t_estado, $t_fecha, $t_hora)
    {
        $this->t_id = $t_id;
        $this->t_clienteFK = $t_clienteFK;
        $this->t_titulo = $t_titulo;
        $this->t_descripcion = $t_descripcion;
        $this->t_fechavencimiento = $t_fechavencimiento;
        $this->t_estado = $t_estado;
        $this->t_fecha = $t_fecha;
        $this->t_hora = $t_hora;
    }

    function getT_id()
    {
        return $this->t_id;
    }

    function getT_clienteFK()
    {
        return $this->t_clienteFK;
    }

    function getT_titulo()
    {
        return $this->t_titulo;
    }

    function getT_descripcion()
    {
        return $this->t_descripcion;
    }

    function getT_fechavencimiento()
    {
        return $this->t_fechavencimiento;
    }

    function getT_estado()
    {
        return $this->t_estado;
    }

    function getT_fecha()
    {
        return $this->t_fecha;
    }

    function getT_hora()
    {
        return $this->t_hora;
    }

    function setT_id($t_id)
    {
        $this->t_id = $t_id;
    }

    function setT_clienteFK($t_clienteFK)
    {
        $this->t_clienteFK = $t_clienteFK;
    }

    function setT_titulo($t_titulo)
    {
        $this->t_titulo = $t_titulo;
    }

    function setT_descripcion($t_descripcion)
    {
        $this->t_descripcion = $t_descripcion;
    }

    function setT_fechavencimiento($t_fechavencimiento)
    {
        $this->t_fechavencimiento = $t_fechavencimiento;
    }

    function setT_estado($t_estado)
    {
        $this->t_estado = $t_estado;
    }

    function setT_fecha($t_fecha)
    {
        $this->t_fecha = $t_fecha;
    }

    function setT_hora($t_hora)
    {
        $this->t_hora = $t_hora;
    }
}
