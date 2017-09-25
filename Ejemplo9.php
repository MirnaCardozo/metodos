<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Empty</title>
  </head>
  <body>
    <h2>Determina si una variable esta vacia o tiene contenido</h2>
    <?php
    $array= array("portero", "defensa", "centrocampista", "delantero");

    if (empty($array))
    	{
        	echo 'El array SÍ está vacío';
    	}
    	else{
    	var_dump($array);
}
    ?>
  </body>
</html>
