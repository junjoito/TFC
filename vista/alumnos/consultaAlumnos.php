<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $cons="select a.numatricula,a.dnialumno,a.nombrealumno,p.nombreprofesor,a.fechaincorporacion,t.tema,g.nombregrupo,a.apellidoPaterno,a.apellidoMaterno,a.dniprofesorpk,a.numordenfk,a.numgrupofk  from profesores p,alumnos a,tfcs t,grupos g where a.dniprofesorpk=p.dniprofesor AND a.numordenfk=t.numorden AND a.numgrupofk=g.numgrupo";
	$res=mysqli_query($conexion,$cons);
	
	require "../../conexiones/conexion.php";
		$constultaDB=$conectividad->prepare("select a.numatricula,a.dnialumno,a.nombrealumno,p.nombreprofesor,a.fechaincorporacion,t.tema,g.nombregrupo,a.apellidoPaterno,a.apellidoMaterno,a.dniprofesorpk,a.numordenfk,a.numgrupofk  from profesores p,alumnos a,tfcs t,grupos g where a.dniprofesorpk=p.dniprofesor AND a.numordenfk=t.numorden AND a.numgrupofk=g.numgrupo");
		$constultaDB->setFetchMode(PDO::FETCH_ASSOC);
        $constultaDB->execute();    
        while ($row = $constultaDB->fetch()){
            echo "Nombre: {$row["matricula"]} ";
			echo "Ciudad: {$row["domicilio"]} ";
			echo "Ciudad: {$row["dnialumno"]} ";
			echo "Ciudad: {$row["nombrealumno"]}";
			echo "Ciudad: {$row["apellidoPaterno"]}";
			echo "Ciudad: {$row["apellidoMaterno"]}";
			echo "Ciudad: {$row["nombreprofesor"]}";
			echo "Ciudad: {$row["nombreincorporacion"]}";
			echo "Ciudad: {$row["tema"]}";
			echo "Ciudad: {$row["nombregrupo"]}";
        }
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
         <h1><span class="icon-user"></span>Alumnos Inscritos</h1>
          <div class="linea"></div>
           <table class="table" border="1">
            <td align="center" colspan="11">Alumnos</td>
			<tr align="center">
				<th >Numero</th>
				<th >Matricula</th>
				<th >DNI</th>
				<th >Nombre</th>
				<th >Apellido Paterno</th>
				<th >Apellido Materno</th>
				<th >Profesor</th>
				<th >Fecha de incorporacion</th>
				<th >Numero de Orden</th>
				<th >Numero de Grupo</th>
				<th >Acciones</th>
			</tr>
			<?php
				$i=1;
				while($fila=mysqli_fetch_array($res))
				{
					
					echo '<tr>
					<td>'.$i.' </td>
					<td>'.$fila['numatricula'].' </td>
					<td>'.$fila['dnialumno'].' </td>
					<td>'.$fila['nombrealumno'].' </td>
                    <td>'.$fila['apellidoPaterno'].' </td>		
					<td>'.$fila['apellidoMaterno'].' </td>
					<td>'.$fila['nombreprofesor'].' </td>
					<td>'.$fila['fechaincorporacion'].' </td>
					<td>'.$fila['tema'].' </td>		
					<td>'.$fila['nombregrupo'].' </td>	
                    <td>
						<a href="../../controlador/alumnos/borrarAlumnos.php?numatricula='.$fila['numatricula'].'"> <button  class="btn btn-outline-info">Borrar</button></a>
						<a href="../../vista/alumnos/modificarAlumnos.php?numatricula='.$fila['numatricula'].'"> <button class="btn btn-outline-info">Modificar</button>
                    </td>
					
					</tr>';
					$i++;			
				}
			?>
		</table>
</div>		
</div>
</body>
</html>