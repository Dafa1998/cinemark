<?php
require_once '../../bd/bd.php';
require_once '../../class/peliculas.php';

$Obj_Peliculas = new Peliculas();

$Obj_Peliculas->Eliminar( $_GET['id'] );
?>