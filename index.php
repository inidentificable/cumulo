<?php
define("UBICACION", "/home/cumulocl/public_html/");
define("ELCUMULO", UBICACION . "Cumulo/");
include_once(UBICACION . 'InterfaceCumulo.php');

$navegacion = new InterfaceCumulo();

$navegacion->llamarInterface("Cabeceras");
$navegacion->llamarInterface("Barra");
$navegacion->llamarInterface("Carrousel");

if (isset($_GET['i'])) {
    $navegacion->llamarInterface($_GET['i']);
} else {
    $navegacion->llamarInterface("Marketing");
}

$navegacion->llamarInterface("PiePagina");

?>
