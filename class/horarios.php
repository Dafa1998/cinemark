<?php
class Horarios extends BD 
{
	//Atributos
	public $Hora_Inicio;

	//Métodos
	public function ListarTodo(){
		$Cadena = "SELECT * FROM tbl_horarios ";
		return $this->EjecutarQuery($Cadena);
	}
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM tbl_horarios WHERE Id_Horario = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}

	public function Insertar(){
		$Cadena = "INSERT INTO tbl_horarios (
		Hora_Inicio) VALUES (
		'".$this->Hora_Inicio."' )";
		return $this->EjecutarQuery($Cadena);
	}
	public function Actualizar( $paId ) {
		$Cadena = "UPDATE tbl_horarios SET 
		Hora_Inicio = '".$this->Hora_Inicio."' 
		WHERE Id_Pelicula = ".$paId;
		return $this->EjecutarQuery( $Cadena );
	}
	
	public function Eliminar( $paId ) {
		$Cadena = "UPDATE tbl_peliculas SET Eliminado = 'S' WHERE Id_Pelicula = '".$paId."' ";
		return $this->EjecutarQuery( $Cadena );
	}

}
?>