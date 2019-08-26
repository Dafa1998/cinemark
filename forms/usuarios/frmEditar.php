<?php
require_once '../../bd/bd.php';
require_once '../../class/usuarios.php';

//Instanciamos la clase de estudiantes
$Obj_Usuarios = new Usuarios();
session_start();
if(isset($_SESSION['Cine_IdUser'])){
	if($_SESSION['Cine_PrivUser'] == 'Administrador'){
$Res_Usuario = $Obj_Usuarios->BuscarPorId($_GET['id']);
}
else{
	$Res_Usuario = $Obj_Usuarios->BuscarPorId($_SESSION['Cine_IdUser']);
	
}
}
//Recuperamos el registro obtenido en una variable
foreach ( $Res_Usuario as $Fila ) {
	$Datos = $Fila;
}

?>

<!-- ACÁ COLOCAMOS LAS DIRECCIONES ABSOLUTAS, PORQUE ACCEDEREMOS DIRECTAMENTE A LOS ARCHIVOS -->
<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="all">
<link rel="stylesheet" type="text/css" href="../../css/main.css" media="all">
<script type="text/javascript" src="../../js/jquery-1.4.4.min.js"></script>

<div class="container">
<center>
<article class="col-s-12   col-m-12 col-l-12 p8">
<div class="card">
	<br>
<h3>Editar Contraseña</h3>
<form action="actualizar.php" class="form" method="post" name="frmEditar" autocomplete="off" enctype="multipart/form-data">
<?php 
if(isset($_SESSION['Cine_IdUser'])){
	if($_SESSION['Cine_PrivUser'] == 'Usuario'){
?>
<label for="antiguaContrasena" >Antigua Contraseña</label>
<input type="password" class="input" name="txtPassword2" id="txtPassword2" placeholder="Ingrese antigua contrasena">

	<?php } } ; ?>
<label for="nuevaContrasena" >Nueva Contraseña</label>
<input type="password" class="input" name="txtPassword" id="txtPassword" placeholder="Ingrese nueva contrasena">

<label for="confirmarContrasena">Confirmar contraseña:</label>
<input type="password" class="input"name="txtConfirmarPassword" id="txtConfirmarPassword" placeholder="Confirme el password...">

<!-- INPUTS HIDDEN PARA ENVIAR DATOS DE CONTROL -->
<input type="hidden" name="hidIdUsuario" value="<?php echo $Datos['Id_Usuario']; ?>">
<input type="button" class="button input" value="Guardar" onclick="jasvascript:ValidarPassword();">
<input type="button" class="button input" value="Cancelar" onclick="javascript:window.close();">
</form>
</div>
	</article>
	</center>
	</div>


<script>
function ValidarPassword(){
	if ( document.getElementById('txtPassword').value != document.getElementById('txtConfirmarPassword').value ) {
		alert('¡Las contraseñas no coinciden ... !');
		document.getElementById('txtPassword').value = '';
		document.getElementById('txtConfirmarPassword').value = '';
		document.getElementById('txtPassword').focus();
	}
	else {
		document.frmEditar.submit();
	}
}
</script>
