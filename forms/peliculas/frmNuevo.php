<?php
require_once '../../func/validarSesion.php';
?>
<script src="js/ckeditor5/ckeditor.js"></script>
<script src="js/ckeditor5/traslations/es.js"></script>
<div class="container">
<center>
<article class="col-s-12   col-m-12 col-l-12 p8">
<div class="card">
	<br>
<h4>Nueva Pelicula</h4>
<hr>
<form action="#" method="post" name="frmNuevo" autocomplete="off" enctype="multipart/form-data" class="form">
<label for="nombrePelicula" >Nombre Pelicula:</label>
<input type="text" class="input" name="txtNombrePelicula" id="txtNombrePelicula" placeholder="Ingrese el nombre de la pelicula">

<label for="Duracion" >Duracion:</label>
<input type="text" class="input" name="txtDuracion" id="txtDuracion" placeholder="Ingrese cuanto dura la pelicula en minutos...">

<label for="descripcion" >Descripcion</label>
<textarea name="txtDescripcion" id="editor" cols="30" rows="10" class="input"></textarea>

<label for="Foto">Foto:</label>
<input type="file" name="filFoto" id="filFoto" class="control control-box full">



<input type="button" class="button input" value="Guardar" onclick="javascript:ValidarPassword();">
<input type="button" class="button input" value="Cancelar" onclick="javascript:ListarPeliculas();">
</form>
<hr>
</div>
</article></center></div>


        <script src="js/ckeditor5/config.js"></script>
<script type="text/javascript">
//Función para insertar un nuevo estudiante
function Insertar() {
	var fd = new FormData(document.forms['frmNuevo']);
	xhr = new XMLHttpRequest();
	xhr.open("POST", "forms/peliculas/insertar.php", false);
	xhr.send(fd);
	con = document.getElementById("DivContenido");
	res = xhr.responseText;
	con.innerHTML = res.ConvertirResponseText();
	ListarPeliculas(); //Esta es la llamada que se hace después de insertar los datos, se deja acá porque desde el archivo frmNuevo.php no se ejecuta 
}

function ValidarPassword(){
	var error=false;
	if(document.getElementById('txtNombrePelicula').value.length == 0){
		error=true;
		alert('Ingrese el nombre completo');
	}
	if(document.getElementById('txtDuracion').value.length == 0){
		error=true;
		alert('Ingrese el Nombre de acceso');
	}
	if(document.getElementById('editor').value.length == 0){
		error=true;
		alert('ingrese una contraseña');
	}

	if(error==false){
		Insertar();
	}
}

</script>