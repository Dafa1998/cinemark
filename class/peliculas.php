<?php
class Peliculas extends BD 
{
	//Atributos
	public $Nombre_Pelicula;
	public $Duracion;
	public $Descripcion;
	public $Url_Foto;

	//Métodos
	public function ListarTodo(){
		$Cadena = "SELECT * FROM tbl_peliculas WHERE Eliminado = 'N' ";
		return $this->EjecutarQuery($Cadena);
	}
	public function ValidarNuevo($paNombreU){
		$Cadena = "SELECT * FROM tbl_peliculas WHERE Nombre_Pelicula = '".$paNombreU."' and Eliminado = 'N'";
		return $this->EjecutarQuery($Cadena);
	}
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM tbl_peliculas WHERE Id_Pelicula = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}

	public function Insertar(){
		$Cadena = "INSERT INTO tbl_peliculas (
		Nombre_Pelicula,
		Duracion,
		Descripcion,
		Url_Foto,
		Eliminado) VALUES (
		'".addslashes($this->Nombre_Pelicula)."', 
		'".addslashes($this->Duracion)."', 
		'".addslashes($this->Descripcion)."', 
		'".addslashes($this->Url_Foto)."',
		'N' )";
		return $this->EjecutarQuery($Cadena);
	}
	public function Actualizar( $paId ) {
		$Cadena = "UPDATE tbl_peliculas SET 
		Nombre_Pelicula = '".addslashes($this->Nombre_Pelicula)."',
		Duracion = '".addslashes($this->Duracion)."',
		Descripciona = '".addslashes($this->Descripcion)."',
		Url_Foto = '".addslashes($this->Url_Foto)."' 
		WHERE Id_Pelicula = ".$paId;
		return $this->EjecutarQuery( $Cadena );
	}
	
	public function Eliminar( $paId ) {
		$Cadena = "UPDATE tbl_peliculas SET Eliminado = 'S' WHERE Id_Pelicula = '".$paId."' ";
		return $this->EjecutarQuery( $Cadena );
	}

}
?>