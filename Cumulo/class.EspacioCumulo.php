<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

public

class EspacioCumulo
{

    var $username;
    var $password;
    var $hostname;

    function EspacioCumulo($n, $p, $h)
    {
        $this->password = $p;
        $this->hostname = $h;
        $this->username = $u;
    }

    function iniciar()
    {
        if (!($link = mysql_connect($this->$hostname, $this->$username, $this->$password))) {
            echo "Error al iniciar el cúmulo.";
            exit();
        }
        if (!mysql_select_db("base_datos", $link)) {
            echo "Error al seleccionar el cúmulo.";
            exit();
        }
        return $link;
    }
}