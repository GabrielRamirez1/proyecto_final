<?php

class ControladorPagina
{

    public function verPagina($ruta)
    {
        require_once $ruta;
    }

    public function Index()
    {
        require_once 'Vista/html/index.php';
    }


    public function Registrate()
    {
        require_once 'Vista/html/registrate.php';
    }
}
