<?php
include_once('db/database_utilities.php');

//Se revisa que las variables nombre y email se esten recibiendo mediante el metodo POST para despues continuar
//con la insercion de los valores ingresados en la base de datos, para finalmente redireccionar al inicio
$t = $todo = filter_input(INPUT_POST, 't');;
$t=$t+"";
if(isset($_POST['nombre'])){
  //add($_POST['nombre'],$_POST['email']);

  add($_POST['nombre'],$_POST['Posicion'],$_POST['carrera'],$_POST['email'],$_POST['id']);
  //header("location: index.php");

}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar Nuevo Usuario</h3>
        <br>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
                <form method="POST" action="add.php">
                  <label for="nombre">Nombre:</label>
                  <input type="text" name="nombre" value=""><br>
                  <input type="hidden" name="id" value="<?php echo $t; ?>"><br>
                  <label for="texto">Posicion:</label>
                  <input type="text" name="Posicion" value=""><br>
                  <label for="carrera">Carrera:</label>
                  <input type="text" name="carrera" value="" id="carrera"><br>
                  <label for="email">Email:</label>
                  <input type="text" name="email" value="" id="email"><br>
                  <button type="submit" class="success">Guardar</button>
                </form>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>