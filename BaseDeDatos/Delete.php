<?php

	include ("ConexionBD.php");
	
	$conexion = mysql_connect($host, $user, $password) or die ("problemas al conectar con el servidor");
	mysql_select_db($dataBase, $conexion) or die ("problemas al conectar a la base de datos");
	$registro = mysql_query("SELECT ID FROM user WHERE NOMBRE = '$_POST[nombre]'", $conexion);
	if ($reg = mysql_fetch_array($registro)){
		mysql_query("DELETE FROM user WHERE NOMBRE = '$_POST[nombre]'", $conexion);
		echo "Usuario eliminado correctamente";
	}
	else {
		echo "El usuario no existe en la Base de Datos";
	}
	
?>