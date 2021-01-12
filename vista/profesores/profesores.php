<?php
 require_once'../../controlador/barraNavegacion.php';
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

    <form action="/TFC2.0/controlador/profesores/profesores.php" method="post" class="needs-validation" novalidate>
    <h1><span class="icon-user-plus"></span>Dar de alta al Profesor</h1>
    <div class="linea"></div>
    <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">DNI</label>
      <input type="text" class="form-control" id="validationCustom01" name="dni" placeholder="DNI" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Nombre</label>
      <input type="text" class="form-control" id="validationCustom02" name="nombre" placeholder="Nombre" required>
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
        <label for="validationCustom02">Correo</label>
        <input type="email" class="form-control" id="validationCustom02" name="correo" placeholder="Correo" required>
        <div class="valid-feedback">
        Looks good!
      </div>  
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Calle</label>
      <input type="text" class="form-control" id="validationCustom03" name="calle" placeholder="Calle" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Ciudad</label>
      <input type="text" class="form-control" id="validationCustom04" name="ciudad" placeholder="Ciudad" required>
      <div class="invalid-feedback">
        Porfavor provee una ciudad valida.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Estado</label>
      <input type="text" class="form-control" id="validationCustom05" name="estado" placeholder="Estado" required>
      <div class="invalid-feedback">
        Porfavor provee un estado valido.
      </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationCustom02">Tribunal al que pertenece</label><br>
        <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select numtribunal,lugardeexamen from tribunales;";
            $resultado=mysqli_query($conexion,$consulta);
            while($row=mysqli_fetch_array($resultado))
            {
                echo'<input type="checkbox" name="tribunal[]" value="'.$row['numtribunal'].'"><label>'.$row['lugardeexamen'].'</label><br>';
            }
          ?>
      </div>
  </div>
  <button class="btn btn-primary" type="submit">Registrar</button>
  <button class="btn btn-secondary" type="reset">Cancelar</button>
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