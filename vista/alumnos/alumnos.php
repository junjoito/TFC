<?php
    require_once'../../controlador/barraNavegacion.php';
    //require"../../vista/alumnos/alumnos.php";
?>  
      
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<div class="container">
<br>
    <form id='form' class="needs-validation" novalidate action="#" method="post">
    
    <h1><span class="icon-user-plus"></span>Dar de alta al Alumno</h1>
<div class="linea"></div>
    <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Matricula</label>
      <input type="text" class="form-control" name="matricula" id="validationCustom01" placeholder="Matricula" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">DNI</label>
      <input type="text" class="form-control" id="validationCustom02" name="dnialumno" placeholder="DNI" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nombre del Alumno</label>
      <input type="text" class="form-control" id="nombre" name="nombrealumno" placeholder="Nombre" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellidos Paterno</label>
      <input type="text" class="form-control" id="validationCustom02" name="apellidop" placeholder="Apellido Paterno" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Apellidos Materno</label>
      <input type="text" class="form-control" id="validationCustom02" name="apellidom" placeholder="Apellido Materno" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom03">Fecha de Incorporacion (YYYY-MM-DD)</label>
      <input type="text" class="form-control" id="validationCustom03" name="fecha" placeholder="YYYY-MM-DD" required>
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
          <option selected disabled>Temas</option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select numorden,tema from tfcs where numorden not in(select numordenfk from alumnos)";
            $resultado=mysqli_query($conexion,$consulta);
            while($fila=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$fila['numorden'].'">'.$fila['tema'].'</option>';
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
          <option selected >Profesor</option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select dniprofesor,nombreprofesor from profesores";
            $resultado=mysqli_query($conexion,$consulta);
            while($fila=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$fila['dniprofesor'].'">'.$fila['nombreprofesor'].'</option>';
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
      <select name="grupo" required class="form-control">
          <option selected disabled>Grupo</option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select numgrupo, nombregrupo from grupos";
            $resultado=mysqli_query($conexion,$consulta);
            while($fila=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$fila['numgrupo'].'">'.
                    $fila['nombregrupo'].'</option>';
            }
          ?>
      </select>
      <div class="invalid-feedback">
        Porfavor provee un estado valido.
      </div>
    </div>
  </div>
  <br>
  <input type="submit" value="Agregar">
  <button class="btn btn-primary" type="submit" id="submit">Subir</button>
  <button class="btn btn-secondary" type="reset">Cancel</button>
</form>
 </div>
 <ul id="list">
 
 </ul>
   
<script>
const arr=[];
  window.onload=() => {
    const form = document.getElementById('form');
    form.onsubmit = (e) => {
      e.preventDefault();
      const nombre = document.getElementById('nombre');
      const textoNombre = nombre.value;
      nombre.value = '';
      arr.push(textoNombre);
      const list = document.getElementById('list');
      const listado = arr.map(t => '<li>'+ t +'</li>');
      list.innerHTML = listado.join('');
    }
  }
</script>
<script src="bootstrap-4.3.1-dist/js/jquery.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>    


</body>
</html> 
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