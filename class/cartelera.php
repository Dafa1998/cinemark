<?php
class Cartelera extends BD 
{
    //Atributos
    public $Id_Pelicula;
	public $Id_Horario;
	public $Id_Sala;
	public $Fecha_Proyeccion;
	public $PTicket;

	//Métodos
	public function ListarCartelera(){
		$Cadena = "SELECT * FROM vta_listar_cartelera where Fecha_Proyeccion = '".date('Y-m-d')."'  group by Id_Pelicula ";//"SELECT * FROM tbl_proyecciones where Eliminado = 'N' ";
		return $this->EjecutarQuery($Cadena);
	}
	public function Contar($fech){
		$Cadena = "SELECT * FROM vta_listar_cartelera where Fecha_Proyeccion = '".$fech."'  group by Id_Pelicula ";
		return $this->EjecutarQuery($Cadena);
	}
	public function detallepeli( $paId ) {
		$Cadena = "SELECT * FROM vta_listar_cartelera WHERE Id_Pelicula = '".$paId."' and Fecha_Proyeccion = '".date('Y-m-d')."'";
		return $this->EjecutarQuery( $Cadena );
	}
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM tbl_Proyecciones WHERE Id_Usuario = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}

	public function Insertar(){
		$Cadena = "INSERT INTO tbl_proyeciones (
		Id_Pelicula,
		Id_Horario,
		Id_Sala,
        Fecha_Proyeccion,
		PTicket,
        Eliminado) VALUES (
		'".$this->Id_Pelicula."', 
		'".$this->Id_Horario."', 
		'".$this->Id_Sala."', 
		'".$this->Fehcha_proyeccion."',
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
		$Cadena = "UPDATE tbl_proyecciones SET Eliminado = 'S' WHERE Id_Usuario = '".$paId."' ";
		return $this->EjecutarQuery( $Cadena );
	}

}
?>