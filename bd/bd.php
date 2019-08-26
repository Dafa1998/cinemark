<?php 
class BD {
    private $server;
    private $User;
    private $Password;
    private $DataBase;
    private $Conexion;
    private $ResultadoQuery;
    
    public function __construct() {
        $this->server = "127.0.0.1";
        $this->User = "root";
        $this->Password = "admin";
        $this->DataBase = "bd_cinemark";
    }

    protected function Conectar() {
        @$this->Conexion = mysqli_connect($this->Server, $this->User, $this->Password, $this->DataBase ) or
        die("<br><br>No se puede establecer conexion");
        return $this->Conexion;
    }

    protected function CerrarConexion() {
        return mysqli_close( $this->Conexion );
    }

    public function EjecutarQuery( $paCadena ) {
        $this->ResultadoQuery = mysqli_query( $this->Conectar(), $paCadena ) or die( "Error en
        consulta<br>Mysql dice: ".mysqli_error( $this->Conexion ) );
        $this->CerrarConexion();
        return $this->ResultadoQuery;
    }
}
?>