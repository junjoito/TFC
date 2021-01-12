<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $cons="SELECT*FROM profesores";
    $res=mysqli_query($conexion,$cons);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table{
            margin: 15px;
        }
    </style>
</head>
<body>
 <br>
 <div class="container">
  <div class="table-responsive"> 
         <h1><span class="icon-user"></span>Profesores Dados de Alta</h1>
          <div class="linea"></div>
           <table class="table" border="1">
            <td align="center" colspan="11">Alumnos</td>
			<tr align="center">
				<th >Numero</th>
				<th >DNI</th>
				<th >Nombre</th>
				<th >Apellido Paterno</th>
				<th >Apellido Materno</th>
				<th >Domicilio</th>
				<th >Correo</th>
				<th >Acciones</th>
			</tr>
			<?php
				$i=1;
				while($fila=mysqli_fetch_array($res))
				{
					
					echo '<tr>
					<td>'.$i.' </td>
					<td>'.$fila['dniprofesor'].' </td>
					<td>'.$fila['nombreprofesor'].' </td>
                    <td>'.$fila['apellidop'].' </td>
					<td>'.$fila['apellidom'].' </td>
					<td>'.$fila['domicilio'].' </td>
                    <td>'.$fila['correo'].' </td>		
                    <td>
						
						<a href="../../vista/profesores/modificarProfesores.php?dniprofesor='.$fila['dniprofesor'].'"> <button class="btn btn-outline-info">Modificar</button>
						
                    </td>
					
					</tr>';
					$i++;			
				}
			?>
		</table></div>
</div>
</body>
</html>
<!-- <a href="../../controlador/profesores/borrarProfesor.php?dniprofesor='.$fila['dniprofesor'].'"> <button  class="btn btn-outline-info">Borrar</button></a> -->