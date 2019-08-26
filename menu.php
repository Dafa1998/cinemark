<style>
body {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	background-image: url(img/prime-conocenos_y_cartelera.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	background-color: #464646;
}

#DivMaqueta1 {
	position: relative;
	height: auto;
	margin: 0 auto;
}

#DivMaqueta2 {
	text-align: center;
	position: relative;
	width: 50%;
	height: auto;
	margin: 0 auto;
	top: 300px;
}

#DivTitulo {
	position: relative;
	width: 90%;
	padding: 20px 0px;
	height: auto;
	margin: 0 auto;
	top: 200px;
}
#DivTitulo img{
	height: auto;
}

.btnMenu {
	display: inline-block;
	border-radius: 4px;
	background-color: #CD5C5C;
	border: none;
	color: #FFFFFF;
	text-align: center;
	font-size: 28px;
	padding: 20px;
	width: 200px;
	transition: all 0.5s;
	cursor: pointer;
	margin: 5px;
}

.btnMenu span {
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
	font-size: 22px;

}
/*
.btnMenu span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -20px;
	transition: 0.5s;
}*/

.btnMenu:hover {
	background-color: #F08080;
}

.btnMenu:hover span {
	padding-right: 25px;
}

.btnMenu:hover span:after {
	opacity: 1;
	right: 0;
}
</style>
<div id="DivMaqueta1">
<div id="DivTitulo" class="rows justify-center-l"><img src="img/logocinemark.png" class=""></div>
<div id="DivMaqueta2">

<btnMenu class="btnMenu" style="vertical-align:middle" onclick="javascript:ListarPeliculas();"><i class="fas fa-film"></i></btnMenu>

<!-- <btnMenu class="btnMenu" style="vertical-align:middle" onclick=""><i class="fas fa-calendar-alt"></i></btnMenu> -->
<btnMenu class="btnMenu" style="vertical-align:middle" onclick=""><i class="fas fa-ticket-alt"></i></btnMenu>
<btnMenu class="btnMenu" style="vertical-align:middle" onclick="javascript:ListarUsuarios();"><i class="fas fa-user"></i></btnMenu>
<btnMenu class="btnMenu" style="vertical-align:middle" onclick="javascript:ListarProyecciones();"><i class="fab fa-algolia"></i></btnMenu>
<btnMenu class="btnMenu" style="vertical-align:middle" onclick="javascript:CerrarSession();"><span>Cerrar Session</span></btnMenu>
</div>
</div>
