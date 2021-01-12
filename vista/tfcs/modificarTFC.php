<?php
    require_once'../../controlador/barraNavegacion.php';
    include"../../modelo/conexiones/conexion.php";
    $numorden =$_GET['numorden'];
    $cons="select t.numorden, t.fechacomienzo, r.lugardeexamen, t.numtribunalfk, t.tema from tfcs t,tribunales r where r.numtribunal=t.numtribunalfk AND numorden ='$numorden'";
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
<h1><span class="icon-user-plus"></span>Modificar TFC</h1>
<div class="linea"></div>
    <form class="needs-validation" novalidate action="/TFC2.0/controlador/tfcs/modificarTFC.php" method="POST">
    <?php $fila=mysqli_fetch_array($res);?>
    <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Numero de Orden</label>
      <input type="text" class="form-control" name="orden" id="validationCustom01" readonly value="<?php echo $fila['numorden'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Fecha de comienzo</label>
      <input type="text" class="form-control" id="validationCustom02" name="fecha" value="<?php echo $fila['fechacomienzo'];?>" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
     <label for="validationCustom02">Lugar</label>
      <select name="lugar" required class="form-control" >
          <option value="<?php echo $fila['numtribunalfk'];?>" selected><?php echo $fila['lugardeexamen'];?></option>
          <?php
            include"../../modelo/conexiones/conexion.php";
            $consulta="select *from tribunales";
            $resultado=mysqli_query($conexion,$consulta);
            while($row1=mysqli_fetch_array($resultado))
            {
                echo '<option value="'.$row1['numtribunal'].'">'.$row1['lugardeexamen'].'</option>';
            }
          ?>
      </select>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationCustom02">Tema</label>
      
      <input type="text" class="form-control" id="validationCustom02" name="tema" value="<?php echo $fila['tema'];?>" required>
      <div class="valid-feedback">
        Looks good!
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