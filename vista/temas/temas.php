<?php
    include_once'../../controlador/barraNavegacion.php';?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="../estilos/menu.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="../php/profesoresAction.php" method="post" class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Numero de Orden</label>
      <input type="text" class="form-control" id="validationCustom01" name="dni" placeholder="DNI" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Titulo</label>
      <input type="text" class="form-control" id="validationCustom02" name="nombre" placeholder="Nombre" required>
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