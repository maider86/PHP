<?php

	include ("ConexionBD.php");
	
	$conexion = mysql_connect($host, $user, $password) or die ("problemas al conectar con el servidor");
	mysql_select_db($dataBase, $conexion) or die ("problemas al conectar a la base de datos");
	$registro = mysql_query("SELECT * FROM user WHERE NOMBRE = '$_POST[nombre]'") or die ("problemas en la consulta: ".mysql_error());
	if ($reg = mysql_fetch_array($registro)){
		while ($reg = mysql_fetch_array($registro)){
			echo $reg['NOMBRE']."<br />";
			echo $reg['PASSWORD']."<br />";
		}
	}
	else{
		echo "El usuario no existe en la Base de Datos";
	}
?>