<?php
require_once '../../func/validarSesion.php';
require_once '../../bd/bd.php';
require_once '../../class/peliculas.php';
require_once '../../class/salas.php';
require_once '../../class/horarios.php';

$Obj_Peliculas = new Peliculas();
$Res_Peliculas = $Obj_Peliculas->ListarTodo();

$Obj_Salas = new Salas();
$Res_Salas = $Obj_Salas->ListarTodo();

$Obj_Horarios = new Horarios();
$Res_Horarios = $Obj_Horarios->ListarTodo();

?>
<div class="container">
<center>
<article class="col-s-12   col-m-12 col-l-12 p8">
<div class="card">
	<br>
<h4>Nueva Proyeccion</h4>
<hr>
<form action="#" method="post" name="frmNuevo" autocomplete="off" enctype="multipart/form-data" class="form">

<label for="Pelicula" >Pelicula:</label>
<select name="cbxPelicula" id="cbxPelicula" class="select">
<option value="#">Seleccione una pelicula</option>	
<?php foreach($Res_Peliculas as $peli){?>
<option value="<?php echo $peli['Id_Pelicula']; ?>"><?php echo $peli['Nombre_Pelicula']; ?></option>
<?php } ?>
</select>

<label for="Sala" >Sala:</label>
<select name="cbxSala" id="cbxSala" class="select">
<option value="#">Seleccione una Sala</option>	
<?php foreach($Res_Salas as $sala){?>
<option value="<?php echo $sala['Id_Sala']; ?>"><?php echo $sala['N_Sala']; ?></option>
<?php } ?>
</select>

<label for="Horario" >Horario:</label>
<select name="cbxHorario" id="cbxHorario" class="select">
<option value="#">Seleccione un Horario</option>	
<?php foreach($Res_Horarios as $horario){?>
<option value="<?php echo $horario['Id_Horario']; ?>"><?php echo $horario['Hora_Inicio']; ?></option>
<?php }?>
</select>

<!--
<p><label for="portada">Portada:</label></p>
<p><input type="file" name="filFoto" id="filFoto">
</p>-->

<label for="Fecha_Proyeccion">Fecha de la Proyeccion</label>
<input type="date" name="dateProyeccion" id="dateProyeccion" class="input">

<label for="pticket">Precio del Ticket</label>
<input type="text" name="txtPTicket" id="txtPTicket" class="input">


<input type="button" class="button input" value="Guardar" onclick="javascript:Insertar();">
<input type="button" class="button input" value="Cancelar" onclick="javascript:ListarProyecciones();">
</form>
<hr>
</div>
</article></center></div>

<script type="text/javascript">
//Función para insertar un nuevo estudiante
function Insertar() {
	var fd = new FormData(document.forms['frmNuevo']);
	xhr = new XMLHttpRequest();
	xhr.open("POST", "forms/proyecciones/insertar.php", false);
	xhr.send(fd);
	con = document.getElementById("DivContenido");
	res = xhr.responseText;
	con.innerHTML = res.ConvertirResponseText();
	ListarProyecciones(); //Esta es la llamada que se hace después de insertar los datos, se deja acá porque desde el archivo frmNuevo.php no se ejecuta 
}


</script>