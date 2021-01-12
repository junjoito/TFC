<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $cons="SELECT * FROM sucursales";
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
         <h1><span class="icon-user"></span>Sucursales Registradas</h1>
          <div class="linea"></div>
           <table class="table" border="1">
            <td align="center" colspan="11">Sucursales</td>
			<tr align="center">
				<th >Numero</th>
				<th >Clave Sucursal</th>
				<th >Sede</th>
                <th >Ubicacion</th>
                <th>Telefono</th>
				<th >Acciones</th>
			</tr>
			<?php
				$i=1;
				while($fila=mysqli_fetch_array($res))
				{
					
					echo '<tr>
					<td>'.$i.' </td>
					<td>'.$fila['numtribunal'].' </td>
					<td>'.$fila['lugardeexamen'].' </td>
                    <td>'.$fila['numcomponentes'].' </td>
                    <td>
						
						<a href="../../vista/tribunales/modificaTribunal.php?numtribunal='.$fila['numtribunal'].'"> <button class="btn btn-outline-info">Modificar</button>
                    </td>
					
					</tr>';
					$i++;			
				}
			?>
		</table></div>
</div>
</body>
</html>