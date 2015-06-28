<?php

/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 28-06-15
 * Time: 02:32 AM
 */
class InterfaceCumulo
{
    /**
     * @param $interface
     */
    function InterfaceCumulo()
    {

    }

    function llamarInterface($interface)
    {
        $archivo = UBICACION . "Cumulo/Interface/" . $interface . ".php";
        require_once($archivo);
    }

    function llamarPlataforma($plataforma)
    {
        $archivo = UBICACION . "Cumulo/Plataforma/" . $plataforma . ".php";
        require_once($archivo);
    }
}

?>