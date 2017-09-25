<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
     <p>Su nombre: <input type="text" name="nombre" /></p>
     <p>Su edad: <input type="text" name="edad" /></p>
     <p><input type="submit" /></p>
    </form>

    Hola <?php echo ($_POST['nombre']); ?>
    Usted tiene <?php echo $_POST['edad']; ?> años.


  </body>
</html>
