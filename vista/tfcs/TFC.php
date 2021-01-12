<?php
    include_once'../../controlador/barraNavegacion.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>    
<div class="container">
   <br>
   
    <form class="needs-validation" novalidate action="/TFC2.0/controlador/tfcs/tfcs.php" method="post" >
<h1><span class="icon-file-text"></span>Agregar Trabajo de Fin de Carrera</h1>
   <div class="linea"></div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationCustom01">Orden</label>
      <input type="text" class="form-control" id="validationCustom01" name="orden" placeholder="Clave" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Tema</label>
      <input type="text" class="form-control" id="validationCustom02" name="tema" placeholder="Tema" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Tribunal</label>
      <select name="tribunal" required class="form-control" >
          <option selected disabled>Tribunal</option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select*from tribunales";
            $resultado=mysqli_query($conexion,$consulta);
            while($fila=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$fila['numtribunal'].'">'.
                    $fila['lugardeexamen'].'</option>';
            }
          ?>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Fecha</label>
      <input type="text" class="form-control" id="validationCustom02" name="fecha" placeholder="Fecha" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>       
  <button class="btn btn-primary" type="submit">Submit form</button>
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