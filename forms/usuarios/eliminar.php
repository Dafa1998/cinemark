<?php
require_once '../../bd/bd.php';
require_once '../../class/usuarios.php';

$Obj_Usuarios = new Usuarios();

$Obj_Usuarios->Eliminar( $_GET['id'] );
?>