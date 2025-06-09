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

  <h3>Modificar Torneo Federado</h3>
</head>  
<body>
  
  <?php
    $mysql=new mysqli("localhost","root","","base1");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
      
    $mysql->query("update rubros set descripcion='$_REQUEST[descripcion]' 
                          where codigo=$_REQUEST[codigo]") or
      die($mysql->error);
     
    echo 'Se Modific&oacute; la Informaci&oacute; del torneo Federado';
    
    $mysql->close();

  ?>  
</body>
</html>