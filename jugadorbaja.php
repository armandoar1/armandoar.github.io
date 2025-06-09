<?php
	$mysql=new mysqli("localhost","root","","base1");
	if ($mysql->connect_error)
	  die("Problemas con la conexión a la base de datos");
  
    $mysql->query("delete from jugador where codigo=$_REQUEST[ClaveJugador]") or
        die($mysql->error);    
	
    $mysql->close();
    
    header('Location:jugadormantenimiento.php');
  ?>  
