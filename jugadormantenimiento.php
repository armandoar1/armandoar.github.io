<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Página Oficial de Club de Hockey Toluca - Metepec MATLAZ</title>
<link rel="shortcut icon" href="images/matlaz.png">
<head>
<link rel="stylesheet" href="Styles.css" />

<style>
 body{
	 margin:0px;
	 padding:0px;
	 background-color:#0040ff;
	 background-image:url(images/Background.jpg)
 }
 
  h3 {
	  	margin: 0 15px 20px;
	  	border-bottom: 2px solid $green-border;
	  	padding: 5px 10px 5px 0;
	  	font-size: 1.1em;
}

	
  .tablalistado {
    border-collapse: collapse;
    box-shadow: 0px 0px 8px #000;
    margin:20px;
  }
  .tablalistado th{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#7591BD;	  
  }  
  .tablalistado td{  
    border: 1px solid #000;
    padding: 5px;
    background-color:#7591BD;	  
  }
  </style>
  
    <a href="index.html"  tabindex="-1" style="text-indent: 0px;"><img src="images/cabecera.png" title="Página Oficial de Club de Hockey Toluca - Metepec MATLAZ" alt="" /></a>
  <h3>Alta de Torneo</h3>
  <title>Listado de artículos</title>
</head>  
<body>
  
  <?php
	$mysql=new mysqli("localhost","root","","base1");
	if ($mysql->connect_error)
	  die("Problemas con la conexión a la base de datos");
  
    $registros=$mysql->query("select     ar.ClaveJugador as ClaveJugadorart,
                                         ar.Edad as Edadart,
										 ar.Altura as Alturaart,
										 ar.Peso as Pesoart,
										 ar.TdeJuego as TdeJuegoart,
										 ar.GaFavor as GaFavorart,
										 ar.GenContra as GenContraart,
										 ar.Puntos as Puntosart,
										 
                                          
                                      from jugador as ar") or
      die($mysql->error);
	 
    echo '<table class="tablalistado">';
    echo '<tr><th>Clave del Jugador</th><th>Edad</th><th>Altura</th><th>Peso</th></th><th>Tiempo de Juego</th></th><th>Goles a Favor</th></th><th>Goles en Contra</th></th><th>Puntos</th><th>Borrar</th><th>Modificar</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['ClaveJugadorart'];
      echo '</td>';	  
      echo '<td>';
      echo $reg['Edadart'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['Alturaart'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['Pesoart'];	  
      echo '</td>';
      echo '<td>';
	  echo $reg['TdeJuegoart'];	  
      echo '</td>';
      echo '<td>';
	        echo $reg['GaFavorart'];	  
      echo '</td>';
      echo '<td>';
	        echo $reg['GenContraart'];	  
      echo '</td>';
      echo '<td>';
	        echo $reg['Puntosart'];	  
      echo '</td>';
      echo '<td>';
      echo '<a href="jugadorbaja.php?codigo='.$reg['ClaveJugadorart'].'"><input type="button" style="width:70px; height:15px;"></a>';
      echo '</td>';
      echo '<td>';
      echo '<a href="jugadormodificacion1.php?codigo='.$reg['ClaveJugadorart'].'"><input type="button" style="width:70px; height:15px;"></a>';
      echo '</td>';      
      echo '</tr>';	  
    }	
    echo '<tr><td colspan="6">';
    echo '<a href="jugadoroalta1.php"><input type="submit" value="Agregar un Nuevo Jugador" style="width:600px; height:20px;font-size:13px;"></a>';
    echo '</td></tr>';
    echo '<table>';	
	
    $mysql->close();

  ?>  
</body>
</html>