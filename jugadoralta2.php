<?php
	$mysql=new mysqli("localhost","root","","base1");
	if ($mysql->connect_error)
	  die("Problemas con la conexión a la base de datos");
  
    $mysql->query("insert into jugador(ClaveJugador,Edad,Altura,Peso,TdeJuego,GaFavor,GenContra,Puntos) 
        values ('$_REQUEST[ClaveJugador]',$_REQUEST[Edad],$_REQUEST[Altura],$_REQUEST[Altura],$_REQUEST[Peso],$_REQUEST[TdeJuego],$_REQUEST[GaFavor],$_REQUEST[GenContra],$_REQUEST[Puntos])") or
      die($mysql->error);
	  
    $mysql->close();

    header('Location:jugadormantenimiento.php');    
?>  
