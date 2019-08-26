<?php
require_once '../../bd/bd.php';
require_once '../../class/proyecciones.php';
require_once '../../class/peliculas.php';
require_once '../../class/horarios.php';
require_once '../../class/cartelera.php';

$Obj_Cartelera = new Cartelera();

$Obj_Peliculas = new Peliculas();
$Res_Peliculas = $Obj_Peliculas->BuscarPorId($_POST['cbxPelicula']);
foreach($Res_Peliculas as $Info){
    $dato = $Info;
}
$Obj_Horarios = new Horarios();
$Res_Horarios = $Obj_Horarios->BuscarPorId($_POST['cbxHorario']);
foreach($Res_Horarios as $Hora){
    $datoH = $Hora;
}

$Obj_Proyecciones = new Proyecciones();

$Obj_Proyecciones->Id_Pelicula = $_POST['cbxPelicula'];
$Obj_Proyecciones->Id_Horario = $_POST['cbxHorario'];
$Obj_Proyecciones->Id_Sala = $_POST['cbxSala'];
$Obj_Proyecciones->Fecha_Proyeccion = $_POST['dateProyeccion'];
$Obj_Proyecciones->PTicket = $_POST['txtPTicket'];
$datos= 0;
$existente = $Obj_Proyecciones->ListarTodo();


$Res_Cartelera = $Obj_Cartelera->Contar($Obj_Proyecciones->Fecha_Proyeccion);
$DatoCuenta=0;
foreach($Res_Cartelera as $cuenta){
    $DatoCuenta=$DatoCuenta+1;

    if($DatoCuenta >= 5 /*&& $cuenta['Id_Pelicula'] == $Obj_Proyecciones->Id_Pelicula*/){
        echo "<script> alert('ya existen cinco peliculas en cartelera') </script>";
        var_dump($DatoCuenta);
        exit;
    }
}

foreach( $existente as $existe ){
    $Res_Horarios = $Obj_Horarios->BuscarPorId($existe['Id_Horario']);
    foreach($Res_Horarios as $Horas){
    $H = $Horas;
    }



    if($existe['Id_Sala']==$Obj_Proyecciones->Id_Sala && ($datoH['Hora_Inicio']<=$H['Hora_Inicio'] && $datoH['Hora_Finalizacion']>=$H['Hora_Finalizacion']) && $existe['Fecha_Proyeccion']==$Obj_Proyecciones->Fecha_Proyeccion){
    $datos=1;
    }
    elseif($existe['Id_Sala']==$Obj_Proyecciones->Id_Sala && ($datoH['Hora_Inicio']>=$H['Hora_Inicio'] && $datoH['Hora_Inicio']<=$H['Hora_Finalizacion']) && $existe['Fecha_Proyeccion']==$Obj_Proyecciones->Fecha_Proyeccion){
    $datos=1;    
    }
    elseif($existe['Id_Sala']==$Obj_Proyecciones->Id_Sala && ($H['Hora_Inicio']>=$datoH['Hora_Inicio'] && $H['Hora_Inicio']<=$datoH['Hora_Finalizacion']) && $existe['Fecha_Proyeccion']==$Obj_Proyecciones->Fecha_Proyeccion){
    $datos=1;    
    }
 
}
if($datos == 1 ){
    echo "<script> alert('ya esta esta ocupada la sala en ese horario') </script>";
}
else{

//Insertamos los datos del registro
$Obj_Proyecciones->Insertar();

}

?>
