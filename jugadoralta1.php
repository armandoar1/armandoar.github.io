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

	
 </style>
  <a href="index.html"  tabindex="-1" style="text-indent: 0px;"><img src="images/cabecera.png" title="Página Oficial de Club de Hockey Toluca - Metepec MATLAZ" alt="" /></a>
  <h3>Inscripción a Torneos Federados</h3>
</head>  
<body>
  <form method="post" action="jugadoralta2.php">
  Ingrese los datos del Jugador:
  <input type="text" name="descripcion" required>
  <br>
  <br>
  Ingrese el Costo de la Inscripci&oacute;n:
  <input type="text" name="precio" required>
  <br>
  <br>
  Seleccione el Torneo:
  <select name="codigorubro">
  <?php
	$mysql=new mysqli("localhost","root","","base1");
	if ($mysql->connect_error)
	  die("Problemas con la conexión a la base de datos");
  
    $registros=$mysql->query("select ClaveJugador,Edad,Altura,Peso,TdeJuego,GaFavor,GenContra,Puntos from jugador") or
      die($mysql->error);
	while ($reg=$registros->fetch_array())
    {
	   echo "<option value=\"".$reg['ClaveJugador']."\">".$reg['Edad']."\">".$reg['Altura']."\">".$reg['Peso']."\">".$reg['TdeJuego']."\">".$reg['GaFavor']."\">".$reg['GenContra']."\">".$reg['Puntos']."</option>";
    }		
  ?>  
  </select>
  <br>
    <br>
<input type="submit" value="Confirmar" style="width:80px; height:20px;font-size:13px;"></a>
  
  </form>
</body>
</html>