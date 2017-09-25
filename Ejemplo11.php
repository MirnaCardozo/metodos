<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>is_null</title>
  </head>
  <body>
    <h2>Determina si una variable es null o no</h2>
<?php
$var_name = 'cadena';
error_reporting(0);
unset($var_name);
if (is_null($var_name))
{
echo 'La variable es NULL';
}
else
{
echo 'La varible no es NULL ';
echo "<br> La variable tiene un valor de: $var_name";
}

 ?>
  </body>
</html>
