<?php
require_once '../../func/validarSesion.php';
?>
<div class="container">
<center>
<article class="col-s-12   col-m-12 col-l-12 p8">
<div class="card">
	<br>
<h4>Nuevo Usuario</h4>
<hr>
<form action="#" method="post" name="frmNuevo" autocomplete="off" enctype="multipart/form-data" class="form">
<label for="nombreCompleto" >Nombre Completo:</label>
<input type="text" class="input" name="txtNombreCompleto" id="txtNombreCompleto" placeholder="Ingrese el nombre completo...">

<label for="nombreUsuario" >Nombre de Acceso:</label>
<input type="text" class="input" name="txtNombreAcceso" id="txtNombreAcceso" placeholder="Ingrese el nombre de acceso...">

<label for="password" >Password:</label>
<input type="password" class="input" name="txtPassword" id="txtPassword" placeholder="Ingrese el password...">

<label for="confirmarPassword" >Confirmar Password:</label>
<input type="password" class="input" name="txtConfirmarPassword" id="txtConfirmarPassword" placeholder="Confirme el password...">

<label for="privilegio" >Privilegio:</label>
<select name="cbxPrivilegio" id="cbxPrivilegio" class="select">
<option value="Usuario">Usuario</option>
<option value="Administrador">Administrador</option>	
</select>

<input type="button" class="button input" value="Guardar" onclick="javascript:ValidarPassword();">
<input type="button" class="button input" value="Cancelar" onclick="javascript:ListarUsuarios();">
</form>
<hr>
</div>
</article></center></div>

<script type="text/javascript">
//Función para insertar un nuevo estudiante
function Insertar() {
	var fd = new FormData(document.forms['frmNuevo']);
	xhr = new XMLHttpRequest();
	xhr.open("POST", "forms/usuarios/insertar.php", false);
	xhr.send(fd);
	con = document.getElementById("DivContenido");
	res = xhr.responseText;
	con.innerHTML = res.ConvertirResponseText();
	ListarUsuarios(); //Esta es la llamada que se hace después de insertar los datos, se deja acá porque desde el archivo frmNuevo.php no se ejecuta 
}

function ValidarPassword(){
	var error=false;
	if(document.getElementById('txtNombreCompleto').value.length == 0){
		error=true;
		alert('Ingrese el nombre completo');
	}
	if(document.getElementById('txtNombreAcceso').value.length == 0){
		error=true;
		alert('Ingrese el Nombre de acceso');
	}
	if(document.getElementById('txtPassword').value.length == 0){
		error=true;
		alert('ingrese una contraseña');
	}
	if ( document.getElementById('txtPassword').value != document.getElementById('txtConfirmarPassword').value ) {
		alert('¡Las contraseñas no coinciden ... !');
		document.getElementById('txtPassword').value = '';
		document.getElementById('txtConfirmarPassword').value = '';
		document.getElementById('txtPassword').focus();
		error=true;
	}
	if(error==false) {
		Insertar();
	}
}

</script>