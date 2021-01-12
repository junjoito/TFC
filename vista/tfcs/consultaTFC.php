<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $cons="select t.numorden, t.fechacomienzo, t.numtribunalfk,t.tema,r.lugardeexamen from tfcs t,tribunales r where t.numtribunalfk=r.numtribunal;";
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
         <h1><span class="icon-user"></span>Temas Actuales</h1>
          <div class="linea"></div>
           <table class="table" border="1">
            <td align="center" colspan="11">Temas</td>
			<tr align="center">
				<th >Numero</th>
				<th >Numero de Orden</th>
				<th >Fecha de Comienzo</th>
				<th >Tribunal</th>
				<th >Tema</th>
				<th >Acciones</th>
			</tr>
			<?php
				$i=1;
				while($fila=mysqli_fetch_array($res))
				{
					
					echo '<tr>
					<td>'.$i.' </td>
					<td>'.$fila['numorden'].' </td>
					<td>'.$fila['fechacomienzo'].' </td>
                    <td>'.$fila['lugardeexamen'].' </td>
					<td>'.$fila['tema'].' </td>
                    <td>
						
						<a href="../../vista/tfcs/modificarTFC.php?numorden='.$fila['numorden'].'"> <button class="btn btn-outline-info">Modificar</button>
                    </td>
					
					</tr>';
					$i++;			
				}
			?>
		</table></div>
</div>
</body>
</html>