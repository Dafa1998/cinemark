<?php
require_once '../../bd/bd.php';
require_once '../../class/cartelera.php';

$Obj_Cartelera = new Cartelera();
$Res_Cartelera = $Obj_Cartelera->ListarCartelera();
   
?>
<div class="container">
<div class="menu rows col-s-12 justify-end-s">
<ul class="rows">
<li class="m8"><a href="#" onclick="AbrirFormEditar();">Cambiar contrasena</a></li>
<li class="m8"><a href="#" onclick="CerrarSession();">Cerrar Session</a></li>
</ul>
</div>
        <div class="rows">
            <article class="col-s-12   col-m-12 col-l-12"><br>
                <h1>CARTELERA</h1>
                <hr>
                </div>
            </article>
        <div class="rows">
        <?php  foreach($Res_Cartelera as $Fila): ?>
            <article class="col-s-8   col-m-4 col-l-3 p8">
                <div class="card">
                <h4 class="title-movie"><?php echo $Fila['Nombre_Pelicula']; ?></h4>
                 <p>
                    <a href="#" onclick="DetallePelicula(<?php echo $Fila['Id_Pelicula']; ?>);"><img src="pic/peliculas/<?php echo $Fila['Url_Foto']; ?>" class="movieimg"></a>                  </p>
                 <a href="#" class="btn btn--primary btn--full" onclick="DetallePelicula(<?php echo $Fila['Id_Pelicula']; ?>);"> IR</a>
                </div>
            </article>
            
        <?php endforeach; ?>    
        </div>
    </div>


<script>

   function DetallePelicula(Id){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "forms/cartelera/detallelistar.php?id=" + Id, false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
   function DetallePeliculas( paId ){
	window.open('forms/cartelera/detallelistar.php?id='+paId, 'frmEditarUsu', 'width=1000,height=700');
}
   function AbrirFormEditar( paId ){
	window.open('forms/usuarios/frmEditar.php?id='+paId, 'frmEditarUsu', 'width=1000,height=700');
}

</script>