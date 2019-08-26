<?php
SESSION_START();
//Incluimos los archivos de clse y de conexion
require_once '../../bd/bd.php';
require_once '../../class/usuarios.php';
$Obj_Usuario = new Usuarios();
$Res_Usuario = $Obj_Usuario->ValidarLogin($_POST['txtNombreAcceso'],md5($_POST['txtPassword']));
$error = false;
$DatosUsuario = 0;
//Recuperamos el registro  del usuario (en el caso que hayan coincidencias)
foreach ($Res_Usuario as $Fila) {
  $DatosUsuario = $Fila;
}

//si se encuentra el ususario que desea logearse:
if (count($DatosUsuario)== 8){
  $_SESSION['Cine_IdUser'] = $DatosUsuario['Id_Usuario'];
  $_SESSION['Cine_NomCompUser'] = $DatosUsuario['NombreCompleto'];
  $_SESSION['Cine_PrivUser'] = $DatosUsuario['Privilegio'];
  echo "<script>alert('Bienvenido ".$DatosUsuario['NombreCompleto']."');</script>";
  echo "<script>window.top.location.replace('../../index.php');</script>" ;
}
else{
  echo "<script>alert('Usuario y/o password incorrectos');</script>";
  echo "<script>window.top.location.replace('../../index.php');</script>" ;
}

?>
