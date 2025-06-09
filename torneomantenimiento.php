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
  
    $registros=$mysql->query("select     ar.codigo as codigoart,
                                         ar.descripcion as descripcionart,
                                         precio,
                                         ru.descripcion as descripcionrub 
                                      from articulos as ar
                                      inner join rubros as ru on ru.codigo=ar.codigorubro") or
      die($mysql->error);
	 
    echo '<table class="tablalistado">';
    echo '<tr><th>Código</th><th>Descripción</th><th>Precio</th><th>Rubro</th><th>Borrar</th><th>Modificar</th></tr>';
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['codigoart'];
      echo '</td>';	  
      echo '<td>';
      echo $reg['descripcionart'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['precio'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['descripcionrub'];	  
      echo '</td>';
      echo '<td>';
      echo '<a href="torneobaja.php?codigo='.$reg['codigoart'].'"><input type="button" style="width:70px; height:15px;"></a>';
      echo '</td>';
      echo '<td>';
      echo '<a href="torneomodificacion1.php?codigo='.$reg['codigoart'].'"><input type="button" style="width:70px; height:15px;"></a>';
      echo '</td>';      
      echo '</tr>';	  
    }	
    echo '<tr><td colspan="6">';
    echo '<a href="torneoalta1.php"><input type="submit" value="Agregar una nueva Categor&iacute;a" style="width:600px; height:20px;font-size:13px;"></a>';
    echo '</td></tr>';
    echo '<table>';	
	
    $mysql->close();

  ?>  
</body>
</html>