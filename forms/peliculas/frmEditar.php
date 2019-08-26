<?php
require_once '../../bd/bd.php';
require_once '../../class/peliculas.php';

//Instanciamos la clase de estudiantes
$Obj_Peliculas = new Peliculas();
session_start();
if(isset($_SESSION['Cine_IdUser'])){
	if($_SESSION['Cine_PrivUser'] == 'Administrador'){
$Res_Pelicula = $Obj_Peliculas->BuscarPorId($_GET['id']);
}
else{
	$Res_Pelicula = $Obj_Peliculas->BuscarPorId($_SESSION['Cine_IdUser']);
	
}
}
//Recuperamos el registro obtenido en una variable
foreach ( $Res_Pelicula as $Fila ) {
	$Datos = $Fila;
}

?>

<!-- ACÁ COLOCAMOS LAS DIRECCIONES ABSOLUTAS, PORQUE ACCEDEREMOS DIRECTAMENTE A LOS ARCHIVOS -->
<link rel="stylesheet" type="text/css" href="../../css/estilos.css" media="all">
<link rel="stylesheet" type="text/css" href="../../css/main.css" media="all">
<script type="text/javascript" src="../../js/jquery-1.4.4.min.js"></script>

<style type="text/css">
	#DivFotoEst {
		background-image: url('../../img/<?php echo $Datos['Url_Foto']; ?>');
		padding: 0;
		background-color: black;
		position: relative;
		text-align: center;
		background-size: cover;
		width: 300px;
		height: 300px;
	}
</style>


<div class="container">
<center>
<article class="col-s-12   col-m-12 col-l-12 p8">
<div class="card">
	<br>
<h3>Editar Pelicula</h3>
<form action="actualizar.php" class="form" method="post" name="frmEditar" autocomplete="off" enctype="multipart/form-data">

<label for="nombrePelicula" >Nombre Pelicula:</label>
<input type="text" class="input" name="txtNombrePelicula" id="txtNombrePelicula" placeholder="Ingrese el nombre de la pelicula" value="<?php echo $Datos['Nombre_Pelicula']; ?>">

<label for="Duracion" >Duracion:</label>
<input type="text" class="input" name="txtDuracion" id="txtDuracion" placeholder="Ingrese cuanto dura la pelicula en minutos..." value="<?php echo $Datos['Duracion']; ?>">

<label for="descripcion" >Descripcion</label>
<textarea name="txtDescripcion" id="editor" cols="30" rows="10" class="input" value=""><?php echo $Datos['Descripcion']; ?></textarea>

<p>Foto Actual:<br>
<div id="DivFotoEst"></div>
</p>

<label for="Foto">Nueva Foto:</label>
<input type="file" name="filFoto" id="filFoto" class="control control-box full">


<!-- INPUTS HIDDEN PARA ENVIAR DATOS DE CONTROL -->
<input type="hidden" name="hidIdUsuario" value="<?php echo $Datos['Id_Pelicula']; ?>">
<input type="button" class="button input" value="Guardar" onclick="jasvascript:document.frmEditar.submit();">
<input type="button" class="button input" value="Cancelar" onclick="javascript:window.close();">
</form>
</div>
	</article>
	</center>
	</div>

<script type="text/javascript">
	$(document).ready(function () {
	$("#filFoto").change(function () {
		//obtenemos un array con los datos del archivo
		var file = $("#filFoto")[0].files[0];
		var fileType = file.type;
		
		if( fileType == 'image/jpeg' || fileType == 'image/png' ){
			var fileInput = document.getElementById("filFoto");
			console.log(fileInput);
			fileInput.addEventListener("change",function(e){
			  var files = this.files
			  showThumbnail(files)
			},false)
		}
		else {
			alert( "Solamente son permitidos los archivos de imágenes JPG y PNG");
			document.getElementById('filFoto').value = '';
			return;		
		}
			
	});
});

</script>
