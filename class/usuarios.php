<?php
class Usuarios extends BD 
{
	//Atributos
	public $NombreCompleto;
	public $NombreUsuario;
	public $Password;
	public $Privilegio;

	//Métodos
	public function ListarTodo(){
		$Cadena = "SELECT * FROM tbl_usuarios WHERE Eliminado = 'N' AND VisibleEnAplicacion = 'S' ";
		return $this->EjecutarQuery($Cadena);
	}
	public function ValidarNuevo($paNombreU){
		$Cadena = "SELECT * FROM tbl_usuarios WHERE NombreUsuario = '".$paNombreU."' and Eliminado = 'N'";
		return $this->EjecutarQuery($Cadena);
	}
	public function ValidarLogin($paNombreU, $paPassword){
		$Cadena = "SELECT * FROM tbl_usuarios WHERE NombreUsuario = '".$paNombreU."' AND Password = '".$paPassword."' AND Eliminado = 'N' ";
		return $this->EjecutarQuery($Cadena);
	}
	public function BuscarPorId( $paId ) {
		$Cadena = "SELECT * FROM tbl_usuarios WHERE Id_Usuario = '".$paId."'  ";
		return $this->EjecutarQuery( $Cadena );
	}

	public function Insertar(){
		$Cadena = "INSERT INTO tbl_usuarios (
		NombreCompleto,
		NombreUsuario,
		Password,
		Privilegio,
		EsEliminable,
		VisibleEnAplicacion,
		Eliminado) VALUES (
		'".addslashes($this->NombreCompleto)."', 
		'".addslashes($this->NombreUsuario)."', 
		'".md5(addslashes($this->Password))."', 
		'".addslashes($this->Privilegio)."',
		'S',
		'S',
		'N' )";
		return $this->EjecutarQuery($Cadena);
	}
	public function Actualizar( $paId ) {
		$Cadena = "UPDATE tbl_usuarios SET 
		Password = '".md5(addslashes($this->Password))."' 
		WHERE Id_Usuario = ".$paId;
		return $this->EjecutarQuery( $Cadena );
	}
	
	public function Eliminar( $paId ) {
		$Cadena = "UPDATE tbl_usuarios SET Eliminado = 'S' WHERE Id_Usuario = '".$paId."' ";
		return $this->EjecutarQuery( $Cadena );
	}

}
?>