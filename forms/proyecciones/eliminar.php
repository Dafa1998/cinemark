<?php
require_once '../../bd/bd.php';
require_once '../../class/proyecciones.php';

$Obj_Proyecciones = new Proyecciones();

$Obj_Proyecciones->Eliminar( $_GET['id'] );
?>