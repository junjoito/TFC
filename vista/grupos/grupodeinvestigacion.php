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

    <form action="/TFC2.0/controlador/grupos/grupos.php" method="post" class="needs-validation" novalidate>
    <h1><span class="icon-user-plus"></span>Dar de alta al Grupo</h1>
    <div class="linea"></div>
    <br>
  <div class="form-row1">
    <div class="col-md-4 mb-3">
      <label for="validationCustom011">Numero de Grupo</label>
      <input type="text" class="form-control" id="validationCustom01" name="numgrupo" placeholder="Numero de Grupo" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom021">Nombre</label>
      <input type="text" class="form-control" id="validationCustom02" name="nombre" placeholder="Nombre" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom021">Numero de Componentes</label>
      <input type="text" class="form-control" id="validationCustom02" name="numcomponentes" placeholder="Numero de Componentes" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
  </div>
  <button class="btn btn-primary1" type="submit">Submit form</button>
  <button class="btn btn-secondary1" type="reset">Cancel</button>
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