<?php
$uri = $_SERVER['REQUEST_URI'];
//echo $uri;
if ($uri == "/examen/public/") {
    require_once "../views/principal.php";
}elseif ($uri == "/examen/public/ejercicio1/") {
    require_once "../views/ejercicio01.php";
}elseif ($uri == "/examen/public/ejercicio2/") {
    require_once "../views/ejercicio02.php";
}elseif ($uri == "/examen/public/ejercicio3/") {    
    require_once "../views/ejercicio03.php";
}

