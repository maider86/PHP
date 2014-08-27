<?php

	include ("ConexionBD.php");

	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['password']) && !empty($_POST['password'])){
		$conexion = mysql_connect($host, $user, $password) or die ("problemas al conectar con el servidor");
		mysql_select_db($dataBase, $conexion) or die ("problemas al conectar a la base de datos");
		mysql_query("INSERT INTO user (NOMBRE,PASSWORD) VALUES ('$_POST[nombre]', '$_POST[password]')", $conexion);
		echo "Datos insertados correctamente";
	}
	else{
		echo "Problemas al insertar datos";
	}

?>