<?php
require_once 'func/validarSesion.php';
?>
<html>
<head>
  <meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/main.css" media="all">
	<script type="text/javascript" src="js/generico.js"></script>
</head>
<body>

<div id="DivContenido">

</div>

</body>
</html>
<?php 
if(isset($_SESSION['Cine_IdUser'])){
  if($_SESSION['Cine_PrivUser'] == 'Administrador'){
      echo "<script type='text/javascript'> MenuPrincipal();
      function MenuPrincipal(){
        xhr = new XMLHttpRequest();
        xhr.open('GET', 'menu.php', false);
        xhr.send();
        con = document.getElementById('DivContenido');
        res = xhr.responseText;
        con.innerHTML = res.ConvertirResponseText();
       }
       </script>";
  }
  else{
    echo "<script type='text/javascript'> ListarCartelera();
    function ListarCartelera(){
        xhr = new XMLHttpRequest();
        xhr.open('GET', 'forms/cartelera/listar.php', false);
        xhr.send();
        con = document.getElementById('DivContenido');
        res = xhr.responseText;
        con.innerHTML = res.ConvertirResponseText();
       }
    </script>";
  }
}
?>
<script type="text/javascript">

//Funcion para mostrar el menu principal
	function MenuPrincipal(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "menu.php", false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
   	function ListarPeliculas(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "forms/peliculas/listar.php", false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
   	function ListarProyecciones(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "forms/proyecciones/listar.php", false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
	function ListarCartelera(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "forms/cartelera/listar.php", false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
   function ListarUsuarios(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "forms/usuarios/listar.php", false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
  
   function CerrarSession(){
    xhr = new XMLHttpRequest();
    xhr.open("GET", "forms/usuarios/CerrarAcceso.php", false);
    xhr.send();
    con = document.getElementById("DivContenido");
    res = xhr.responseText;
    con.innerHTML = res.ConvertirResponseText();
   }
</script>
