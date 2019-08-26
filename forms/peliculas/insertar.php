<?php
require_once '../../bd/bd.php';
require_once '../../class/peliculas.php';

$Obj_Peliculas = new Peliculas();

$Obj_Peliculas->Nombre_Pelicula = $_POST['txtNombrePelicula'];
$Obj_Peliculas->Duracion = $_POST['txtDuracion'];
$Obj_Peliculas->Descripcion = $_POST['txtDescripcion'];
//Se guarda la foto del estudiante, si la hay
if ( $_FILES['filFoto']['tmp_name'] != '' ) {
	$NombreTemporalImg = $_FILES['filFoto']['tmp_name'];
	$TipoImg = $_FILES['filFoto']['type'];
	$NombreImg = "fotoest_".date("ymdhis");
	if( $TipoImg == 'image/png' ){
		$Extension = "png";
	}
	else if( $TipoImg == 'image/jpeg' ){
		$Extension = "jpg";
	}
	else {
		$Extension = '';	
	}

	$NombreFinalImg = $NombreImg.'.'.$Extension;
	$UbicacionImg = '../../pic/peliculas/'.$NombreFinalImg;
	copy( $NombreTemporalImg, $UbicacionImg );

	$Obj_Peliculas->Url_Foto = $UbicacionImg;
}
else {
	$Obj_Peliculas->Url_Foto = '';
}

//Insertamos los datos del registro
$Obj_Peliculas->Insertar();


?>