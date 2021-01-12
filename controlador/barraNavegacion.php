<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/TFC2.0/vista/estilos/barraNavegacion.css">
    <link rel="stylesheet" href="/TFC2.0/vista/iconos/fonts.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/TFC2.0/vista/bootstrap-4.3.1-dist/css/bootstrap.css">
    <style>body{background:#f8f9f9;}
    </style>
</head>
<body>
  <!--
   <header>#f8f9f9
  <nav class="navegacion">
       <img src="../vista/imagenes/images.png" alt="">
        <ul class="menu">
            <li><a href="/TFC2.0/index.php">Inicio</a></li>
            <li><a href="">Profesores</a>
                <ul class="submenu">
                    <li><a href="/TFC2.0/controlador/profesores/profesores.php">Alta</a></li>
                    <li><a href="#">Modifica</a></li>
                    <li><a href="../html/profesoresconsulta.html">Consulta</a></li>
                    
                </ul>
            </li>
            <li><a href="">Alumnos</a>
                <ul class="submenu">
                    <li><a href="/TFC2.0/controlador/alumnos/alumnos.php">Alta</a></li>
                    <li><a href="#">Modifica</a></li>
                    <li><a href="../html/alumnosconsulta.html">Consulta</a></li>
                    
                </ul>
            </li>
            <li><a href="">TFC</a>
                <ul class="submenu">
                    <li><a href="/TFC2.0/controlador/tfcs/tfcs.php">Alta</a></li>
                    <li><a href="#">Modifica</a></li>
                    <li><a href="../html/TFCconsulta.html">Consulta</a></li>
                    
                </ul>
            </li>
            <li><a href="">Tribunal</a>
                <ul class="submenu">
                    <li><a href="/TFC2.0/controlador/tribunales/tribunales.php">Alta</a></li>
                    <li><a href="#">Modifica</a></li>
                    <li><a href="../html/tribunalconsulta.html">Consulta</a></li>
                    
                </ul>
            </li>
            <li><a href="">Grupo de Investigacion</a>
                <ul class="submenu">
                    <li><a href="/TFC2.0/controlador/grupos/grupos.php">Alta</a></li>
                    <a href="/TFC2.0/controlador/grupos/grupos.php"></a>
                    <li><a href="#">Modifica</a></li>
                    <li><a href="../html/grupodeinvestigacionconsulta.html">Consulta</a></li>
                    
                </ul>
            </li>

        </ul>
    </nav>
</header>
   -->
    <header>
        <div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-menu"></span>Sistema del Administrador</a>
		</div>
        
		<nav style="overflow: scroll;">
			<ul>
				<li><a href="/TFC2.0/index.php"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="/TFC2.0/vista/profesores/profesores.php"><span class="icon-user-tie"></span>Profesores</a>
				    <ul>
				        <li><a href="/TFC2.0/vista/profesores/consultaProfesores.php">Mostrar</a></li>
				    </ul>
				</li>
				<li><a href="/TFC2.0/vista/alumnos/alumnos.php"><span class="icon-user"></span>Alumnos</a>
				    <ul>
				        <li><a href="/TFC2.0/vista/alumnos/consultaAlumnos.php">Mostrar</a></li>
				    </ul>
				</li>
				<li><a href="/TFC2.0/vista/tfcs/TFC.php"><span class="icon-file-text"></span>TFC</a>
				    <ul>
				        <li><a href="/TFC2.0/vista/tfcs/consultaTFC.php">Mostrar</a></li>
				    </ul>
				</li>
				<li><a href="/TFC2.0/vista/tribunales/tribunal.php"><span class="icon-users"></span>Tribunal</a>
				    <ul>
				        <li><a href="/TFC2.0/vista/tribunales/consultaTribunal.php">Mostrar</a></li>
				    </ul>
				</li>
				<li><a href="/TFC2.0/vista/grupos/grupodeinvestigacion.php"><span class="icon-rocket"></span>Grupo de Investigacion</a>
				    <ul>
				        <li><a href="/TFC2.0/vista/grupos/consultaGrupo.php">Mostrar</a></li>
				    </ul>
				</li>
			</ul>
		</nav>
        
    </header>
    <script src="vista/bootstrap-4.3.1-dist/js/jquery.js"></script>
    <script src="vista/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('nav').animate({
				left: '0 '
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
 
};
    </script>
</body>
</html>