<?php
//llamar el archivo de conexión
require_once '../../bd/bd.php';
//llamar a la clase de los paginadores
require_once '../../class/paginador.php';
//Instanciamos la clase de los paginadores
$Obj_Paginador = new Paginador();
//Asignamos los valores necesatrios a los atributos de la clase
$Obj_Paginador->Cadena = "SELECT * FROM tbl_usuarios WHERE Eliminado = 'N' AND VisibleEnAplicacion = 'S'";
$Obj_Paginador->CadenaCount = "SELECT COUNT(Id_Usuario) FROM tbl_usuarios WHERE Eliminado = 'N' AND VisibleEnAplicacion = 'S'";
$Obj_Paginador->FilasPorPagina = 7;
$Obj_Paginador->NumPagina = @$_GET['np'];
$Obj_Paginador->EnlaceListar = "forms/usuarios/listar.php";
//Aplicar la configuración al paginador
$Obj_Paginador->ConfPaginador();
?>
<style type="text/css">

</style>
<!-- REFERENCIA A LA LIBRERIA DE JQUERY -->
<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
<br>
<!--<input type="text" name="txtBuscar" id="txtBuscar" placeholder="Ingrese nombre ...">
<input type="button" name="btnBuscar" class="btnBuscar" id="btnBuscar" value="Buscar" onclick="javascript:Buscar(document.getElementById('txtBuscar').value);">-->
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onclick="javascript:FormNuevo();">Nuevo Usuario</a> | <a href="#" onclick="javascript:ListarUsuarios();">Mostrar Listado</a> | <a href="#" onclick="javascript:MenuPrincipal();">Cerrar</a>
<br>
<?php
echo $Obj_Paginador->MostrarControles();
?>
<br>
<table>
<tbody>
<tr>
	<th width="40%" align="center" valign="middle">NOMBRE COMPLETO</th>
	<th width="30%" align="center" valign="middle">NOMBRE DE ACCESO</th>
	<th width="20%" align="center" valign="middle">PRIVILEGIO</th>
	<th colspan="3" align="center" valign="middle">&nbsp;</th>
	</tr>	
<?php
foreach ( $Obj_Paginador->ResultadoLimit as $Fila )	{
?>
<tr>
	<td><?php echo $Fila['NombreCompleto']; ?></td>
	<td><?php echo $Fila['NombreUsuario']; ?></td>
	<td><?php echo $Fila['Privilegio']; ?></td>
	<td width="3%"><a href="#" onclick="javscript:Eliminar('<?php echo $Fila['Id_Usuario']; ?>');"><img src="img/delete.png" title="Detalles"></a></td>
	<td width="3%"><a href="#" onclick="javascript:AbrirFormEditar('<?php echo $Fila['Id_Usuario']; ?>');"><img src="img/edit.png" title="Editar"></a></td>
	<!--<td width="5%"><a href="#" onclick="javasctipt:EliminarEstudiante('<?php echo $Fila['IdUsuario']; ?>');"><img src="img/delete.png" title="Eliminar"></a></td> -->
</tr>
<?php
}
?>
</tbody>
</table>
<script type="text/javascript">
//Función para cargar el formulario de nuevo estudiante
function FormNuevo() {
	xhr = new XMLHttpRequest();
	xhr.open("GET", "forms/usuarios/frmNuevo.php", false);
	xhr.send();
	con = document.getElementById("DivContenido");
	res = xhr.responseText;
	con.innerHTML = res.ConvertirResponseText();
}

function AbrirFormEditar( paId ){
	window.open('forms/usuarios/frmEditar.php?id='+paId, 'frmEditarUsu', 'width=1000,height=700');
}	
	
//Función para eliminar estudiantes
function Eliminar( paIdE ){
	if( confirm('¿Confirma eliminar este usuario?') ){
		xhr = new XMLHttpRequest();
		xhr.open("GET", "forms/usuarios/eliminar.php?id=" + paIdE, false);
		xhr.send();
		con = document.getElementById("DivContenido");
		res = xhr.responseText;
		con.innerHTML = res.ConvertirResponseText();
		ListarUsuarios();		
	}
}
	
function AbrirFormDetalles( paId ){
	window.open('forms/usuarios/frmDetalles.php?id='+paId, 'frmDetallesEst', 'width=1000,height=700');
}	
	
	
//Función para buscar estudiantes
function Buscar( paTexto ) {
	xhr = new XMLHttpRequest();
	xhr.open("GET", "forms/usuarios/buscar.php?bu=" + paTexto, false);
	xhr.send();
	con = document.getElementById("DivContenido");
	res = xhr.responseText;
	con.innerHTML = res.ConvertirResponseText();
}
	
</script>