<?php
SESSION_START();
if(isset($_SESSION['Cine_IdUser'])){
  header('Location: index.php');
}

?><html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/main.css" media="all">
	<script type="text/javascript" src="js/generico.js"></script>
	<style>
	#container{
		height:100%;
	}
	</style>
</head>
<body>

<div id="container" class="container rows justify-center-s align-center-s">

<form action="forms/usuarios/validarAcceso.php" method="post" name="frmLogin" autocomplete="off" enctype="multipart/form-data" class="col-m-6">
<h3 class="rows justify-center-s color--primary"><p>Inicio de Sesión</p></h3>
<p>Nombre de Acceso:<br>
<input type="text" name="txtNombreAcceso" id="txtNombreAcceso" placeholder="Ingrese el nombre de acceso..." class="control control-box input">
</p>
<p>Password:<br>
<input type="password" name="txtPassword" id="txtPassword" placeholder="Ingrese el password..." class="control control-box input">
</p>
<p class="rows justify-around-s">
<input type="button" id="btnOk" value="Ingresar" onclick="javascript:IniciarSesion();" class="bg--third btn btn--text btn--round">
<input type="reset" id="btnNo" value="Cancelar" class="bg--third btn btn--text btn--round">
</p>
</form>
</div>

</body>
</html>

<script type="text/javascript">
function IniciarSesion(){
	document.frmLogin.submit();
}

document.getElementById("txtPassword")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("btnOk").click();
    }
});

</script>
