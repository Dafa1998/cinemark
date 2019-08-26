<?php
class Bucatas extends BD 
{

	//Métodos
	public function ListarTodo(){
		$Cadena = "SELECT * FROM tbl_asientos WHERE Id_Sala = '".$paId."' group by LetraFila";
		return $this->EjecutarQuery($Cadena);
    }
    
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM tbl_asientos WHERE Id_Sala = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}


}
?>