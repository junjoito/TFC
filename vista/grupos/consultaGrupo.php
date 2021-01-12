<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $cons="select*from grupos";
    $res=mysqli_query($conexion,$cons);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
  
</head>
<body>
 <br>
 <div class="container">
  <div class="table-responsive"> 
         <h1><span class="icon-user"></span>Grupos Registrados</h1>
          <div class="linea"></div>
           <table class="table" border="1">
            <td align="center" colspan="11">Grupos</td>
			<tr align="center">
				<th >Numero</th>
				<th >Numero de Grupo</th>
				<th >NOmbre</th>
                <th >Numero de Componentes</th>
				<th >Acciones</th>
			</tr>
			<?php
				$i=1;
				while($fila=mysqli_fetch_array($res))
				{
					
					echo '<tr>
					<td>'.$i.' </td>
					<td>'.$fila['numgrupo'].' </td>
					<td>'.$fila['nombregrupo'].' </td>
                    <td>'.$fila['numcomponentes'].' </td>
                    <td>
						
						<a href="../../vista/grupos/modificaGrupo.php?numgrupo='.$fila['numgrupo'].'"> <button class="btn btn-outline-info">Modificar</button>
                    </td>
					
					</tr>';
					$i++;			
				}
			?>
		</table></div>
</div>
</body>
</html>