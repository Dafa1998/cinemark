<?php
require_once '../../bd/bd.php';
require_once '../../class/usuarios.php';
session_start();
$Obj_Usuarios = new Usuarios();
foreach($Obj_Usuarios->BuscarPorId($_SESSION['Cine_IdUser']) as $fila){
	$datos =$fila;
}

if(isset($_SESSION['Cine_IdUser'])){
	if($_SESSION['Cine_PrivUser'] == 'Usuario'){
		if($datos['Password']== md5($_POST['txtPassword2'])){

			$Obj_Usuarios->Password = $_POST['txtPassword'];
			
			//Actualizamos los datos del registro
			$Obj_Usuarios->Actualizar( $_SESSION['Cine_IdUser'] );
			}
		else{
			echo "<script> alert('contrasena incorrecta')</script>";
		}

		echo "<script> window.close();  </script>";
 }
 else{
	 
$Obj_Usuarios->Password = $_POST['txtPassword'];

//Actualizamos los datos del registro
$Obj_Usuarios->Actualizar( $_POST['hidIdUsuario'] );

	echo "
	<script type='text/javascript'>
		window.opener.ListarUsuarios();
		window.close();
	
	</script>";

 }
 } ?>



