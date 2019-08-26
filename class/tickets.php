<?php
class Tickets extends BD{
    public function ListarTodo(){
		$Cadena = "SELECT * FROM tbl_tickets ";
		return $this->EjecutarQuery($Cadena);
    }
    
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM vta_listar_tickets WHERE Id_Proyeccion = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}


}
?>