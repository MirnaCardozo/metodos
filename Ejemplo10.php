<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>isset</title>
  </head>
  <h2>Determina si una variable esta definida o es NULL</h2>
  <body>
    <?php
    $jugadores = array ('portero' => 'Casillas', 'Defensa' => 'Pepe');
    if (isset($jugadores['portero']))
    	{
    	echo "Variable de array definida!!!";
    	}else
    		{
    		echo "Variable de array NO definida!!!";
    		}

    $jugadores = array ('portero' => 'Casillas', 'Defensa' => 'Pepe');
    if (isset($jugadores['delantero']))
    	{
    	echo "Variable de array definida!!!";
    }
     ?>

  </body>
</html>
