<?php
class Salas extends BD 
{

	//Métodos
	public function ListarTodo(){
		$Cadena = "SELECT * FROM tbl_salas ";
		return $this->EjecutarQuery($Cadena);
	}


}
?>