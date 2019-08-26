<?php
class Proyecciones extends BD 
{
    //Atributos
    public $Id_Pelicula;
	public $Id_Horario;
	public $Id_Sala;
	public $Fecha_Proyeccion;
	public $PTicket;

	//Métodos
	public function Listartodo(){
		$Cadena = "SELECT * FROM tbl_proyecciones where Eliminado = 'N' ";
		return $this->EjecutarQuery($Cadena);
	}
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM tbl_proyecciones WHERE Id_Proyeccion = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}

	public function Insertar(){
		$Cadena = "INSERT INTO tbl_proyecciones (
		Id_Pelicula,
		Id_Horario,
		Id_Sala,
        Fecha_Proyeccion,
		PTicket,
        Eliminado) VALUES (
		'".$this->Id_Pelicula."', 
		'".$this->Id_Horario."', 
		'".$this->Id_Sala."', 
		'".$this->Fecha_Proyeccion."',
        '".$this->PTicket."',
         'N' )";
		return $this->EjecutarQuery($Cadena);
	}
	public function Actualizar( $paId ) {
		$Cadena = "UPDATE tbl_proyecciones SET 
		Id_Pelicula = '".$this->Id_Pelicula."' 
		Id_Horario = '".$this->Id_Horario."' 
		Id_Sala = '".$this->Id_Sala."' 
		Fecha_Proyeccion = '".$this->Fecha_Proyeccion."' 
		PTicket = '".$this->PTicket."' 
		Eliminado = 'N' 
		WHERE Id_Proyeccion = ".$paId;
		return $this->EjecutarQuery( $Cadena );
	}
	
	public function Eliminar( $paId ) {
		$Cadena = "UPDATE tbl_proyecciones SET Eliminado = 'S' WHERE Id_Proyeccion = '".$paId."' ";
		return $this->EjecutarQuery( $Cadena );
	}

}
?>