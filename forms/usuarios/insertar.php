<?php
require_once '../../bd/bd.php';
require_once '../../class/usuarios.php';

$Obj_Usuarios = new Usuarios();

$Obj_Usuarios->NombreUsuario = $_POST['txtNombreAcceso'];
$Obj_Usuarios->NombreCompleto = $_POST['txtNombreCompleto'];
$Obj_Usuarios->Password = $_POST['txtPassword'];
$Obj_Usuarios->Privilegio = $_POST['cbxPrivilegio'];
$datos= 0;
$existente = $Obj_Usuarios->ValidarNuevo($Obj_Usuarios->NombreUsuario);
foreach( $existente as $existe ){
    $datos = $existe;
}
$error =false;
if(count($datos) == 8){
    echo "<script> alert('el usuario ya existe') </script>"; 
    $error=true;
}
if (strlen($Obj_Usuarios->NombreCompleto) == 0) {
    $error=true;
    echo "<script> alert('Ingrese el nombre completo') </script>"; 
}
if (strlen($Obj_Usuarios->NombreUsuario) == 0) {
    $error=true;
    echo "<script> alert('Ingrese el Nombre de acceso') </script>"; 
}
if (strlen($Obj_Usuarios->Password) == 0) {
    $error=true;
    echo "<script> alert('ingrese una contraseña') </script>"; 
}
if($error == false){
    
//Insertamos los datos del registro
$Obj_Usuarios->Insertar();

}

?>