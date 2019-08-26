<?php
require_once '../../bd/bd.php';
require_once '../../class/cartelera.php';
require_once '../../class/peliculas.php';

$Obj_Peliculas = new Peliculas();
$Res_Peliculas = $Obj_Peliculas->BuscarPorId($_GET['id']);
$Obj_Cartelera = new Cartelera();
$Res_Cartelera = $Obj_Cartelera->Detallepeli($_GET['id']);
foreach($Res_Peliculas as $Fila2){
   $Datos=$Fila2;
}
?>
<div class="rows justify-center-s align-center-s">
    <div class="detail card m20 p16 col-s-6">
        <div class="tittle"><h2><?php echo $Datos['Nombre_Pelicula']; ?></h2></div>
        <div class="info rows">
            <div class="img m8 col-s-3"><img src="pic/peliculas/<?php echo $Datos['Url_Foto']; ?>" class="movieimg"></div>
            <div class="horarios m8 p4 col-s-8"> 
                <?php foreach($Res_Cartelera as $Fila){ ?>
                    <a href="#" onclick="Bucatas(<?php echo $Fila['Id_Proyeccion']?>);" class="p4 bg--third round"><?php echo $Fila['Hora_Inicio'];?></a> 
                <?php } ?>
                <h2 class="m8"> Sinapsis</h2>
                <div class="sinopsis col-s-12">
                    <?php echo $Datos['Descripcion'] ?>                    
                </div>
            </div>
        </div>
        <a href="#" onclick="ListarCartelera();" class="btn btn--primary color--black">Volver atras</a>
    </div>
</div>

<script>

function Bucatas(Id){
 xhr = new XMLHttpRequest();
 xhr.open("GET", "forms/cartelera/bucatas.php?id=" + Id, false);
 xhr.send();
 con = document.getElementById("DivContenido");
 res = xhr.responseText;
 con.innerHTML = res.ConvertirResponseText();
}
</script>