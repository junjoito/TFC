<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $alumno=$_GET['numatricula'];
    $cons="select a.numatricula,a.dnialumno,a.nombrealumno,p.nombreprofesor,a.fechaincorporacion,t.tema,g.nombregrupo,a.apellidoPaterno,a.apellidoMaterno,a.dniprofesorpk,a.numordenfk,a.numgrupofk  from profesores p,alumnos a,tfcs t,grupos g where a.dniprofesorpk=p.dniprofesor AND a.numordenfk=t.numorden AND a.numgrupofk=g.numgrupo AND numatricula='$alumno'";
    $res=mysqli_query($conexion,$cons);
    
?>  

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/vista/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
<br>
<h1><span class="icon-user-plus"></span>Modificar al Alumno</h1>
<div class="linea"></div>
   
    <form class="needs-validation" novalidate action="/TFC2.0/controlador/alumnos/modificarAlumnos.php" method="POST">
    <?php $fila=mysqli_fetch_array($res);?>
    <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Matricula</label>
      <input type="text" class="form-control" name="matricula" id="validationCustom01" readonly value="<?php echo $fila['numatricula'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">DNI</label>
      
      <input type="text" class="form-control" id="validationCustom02" name="dnialumno" value="<?php echo $fila['dnialumno'];?>" required>
      
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nombre del Alumno</label>
      <input type="text" class="form-control" id="validationCustom02" name="nombrealumno" value="<?php echo $fila['nombrealumno'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellidos Paterno</label>
      <input type="text" class="form-control" id="validationCustom02" name="apellidop" value="<?php echo $fila['apellidoPaterno'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellidos Materno</label>
      
      <input type="text" class="form-control" id="validationCustom02" name="apellidom" value="<?php echo $fila['apellidoMaterno'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Fecha de Incorporacion</label>
      
      <input type="text" class="form-control" id="validationCustom03" name="fecha" value="<?php echo $fila['fechaincorporacion'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  </div>
  <div class="form-row">
   <div class="col-md-3 mb-3">
      <label for="validationCustom04">Tema</label>
        <br>
        
      <select name="tema" required class="form-control" >
         
          <option selected value="<?php echo $fila['numordenfk'];?>"><?php echo $fila['tema'];?></option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select numorden,tema from tfcs where numorden not in(select numordenfk from alumnos)";
            $resultado=mysqli_query($conexion,$consulta);
            while($row=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$row['numorden'].'">'.$row['tema'].'</option>';
            }
          ?>
      </select>
      <div class="invalid-feedback">
        Porfavor provee una ciudad valida.
      </div>
    </div>
    
    <div class="col-md-2 mb-3">
      <label for="validationCustom02">Profesor a Asignar</label>
      <br>
      
      <select name="profesor" required class="form-control" >
          <option value="<?php echo $fila['dniprofesorpk'];?>" selected ><?php echo $fila['nombreprofesor'];?></option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select dniprofesor,nombreprofesor from profesores";
            $resultado=mysqli_query($conexion,$consulta);
            while($row1=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$row1['dniprofesor'].'">'.$row1['nombreprofesor'].'</option>';
            }
          ?>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationCustom05">Seleccione el grupo</label>
      <br>
      <select name="grupo" class="form-control">
          <option  selected value="<?php echo $fila['numgrupofk'];?>"><?php echo $fila['nombregrupo'];?></option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select numgrupo, nombregrupo from grupos";
            $resultado=mysqli_query($conexion,$consulta);
            while($row=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$row['numgrupo'].'">'.$row['nombregrupo'].'</option>';
            }
          ?>
      </select>
           
      <div class="invalid-feedback">
        Porfavor provee un estado valido.
      </div>
    </div>
  </div>
  <br>
  <button class="btn btn-primary" type="submit" id="submit">Capturar</button>
  <button class="btn btn-secondary" type="reset">Cancel</button>
</form>
 </div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {      
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>    
<script src="bootstrap-4.3.1-dist/js/jquery.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>    


</body>
</html>     