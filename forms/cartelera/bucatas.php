<?php
require_once '../../bd/bd.php';
require_once '../../class/proyecciones.php';
require_once '../../class/peliculas.php';
require_once '../../class/bucatas.php';
require_once '../../class/tickets.php';
$Obj_Proyecciones = new Proyecciones();
$Res_Proyecciones = $Obj_Proyecciones->BuscarPorId($_GET['id']);
foreach($Res_Proyecciones as $Fila){
    $Dato=$Fila;
 }

$Obj_Peliculas = new Peliculas();
$Res_Peliculas = $Obj_Peliculas->BuscarPorId($Dato['Id_Pelicula']);
foreach($Res_Peliculas as $Fila2){
   $Datos=$Fila2;
}

$Obj_Bucatas = new Bucatas();
$Res_Bucatas = $Obj_Bucatas->BuscarPorId($Dato['Id_Sala']);

$Obj_Tickets = new Tickets();
$Res_Tickets = $Obj_Tickets->BuscarPorId($Dato['Id_Proyeccion']);

?>

<h6>Avengers Infinity ward<br>
Presentandose el miercoles 12 de mayo 8:45 pm<br>
El salvador Metrocentro San Miguel Sala 2</h6>
    <h3>SELECCIONAR</h3>
    <h2 class="c"> BUTACA(S)</h2><br>
    <article class=" col-s-12 col-m-12 col-l-12">
    <aricle class=" col-s-3 col-m-3 col-l-3 offset-s-12">

</aricle>


        <article class="">
        <center>
        <div class="col-s-s col-m-s col-l-s btnB1"></div>Sub-butacas
        <div class="col-s-s col-m-s col-l-s btnB2"></div>Disponible
        <div class="col-s-s col-m-s col-l-s btnB3"></div>Reservadas
        <div class="col-s-10 col-m-10 col-l-10 btnp">Pantalla</div><br><br>
</center>
  
<center>
<?php
foreach($Res_Bucatas as $Fila3){
    foreach($Res_Tickets as $fila4){
?> 
    <div class="col-s-0 col-m-0 col-l-0 btnB2"><?php echo $Datos['N_Asiento']?></div>

<?php //} 
} } ?>


A<div class="col-s-0 col-m-0 col-l-0 btnp1"></div>
<div class="col-s-0 col-m-0 col-l-0 btnp1"></div>           
 <div class="col-s-0 col-m-0 col-l-0 btnB">1</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">2</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">3</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">4</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">5</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">6</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">7</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">8</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">9</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">10</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">11</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">12</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">13</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">14</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">15</div>
<div class="col-s-0 col-m-0 col-l-0 btnB">16</div>
<div class="col-s-0 col-m-0 col-l-0 btnp1"></div>
<div class="col-s-0 col-m-0 col-l-0 btnp1"></div>A    
<br>

</center>


</article>
<a href="#" onclick="ListarCartelera();" class="btn btn--primary color--black">Volver atras</a>