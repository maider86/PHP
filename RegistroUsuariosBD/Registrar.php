<?php

	include ("ConexionBD.php");
	
	if (isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['password']) && !empty($_POST['password']) &&
		isset($_POST['password2']) && !empty($_POST['password2']) &&
		isset($_POST['email']) && !empty($_POST['email']) &&
		$_POST['password'] == $_POST['password2']){
			$conexion = mysql_connect($host, $user, $password) or die ("problemas al conectar con el servidor");
			mysql_select_db($dataBase, $conexion) or die ("problemas al conectar a la base de datos");
			mysql_query("INSERT INTO registro (NOMBRE, USER, PASSWORD, EMAIL) VALUES ('$_POST[nombre]', '$_POST[user]', '$_POST[password]', '$_POST[email]')", $conexion);
			echo "Usuario registrado correctamente<br />";
			echo "Nombre: ".$_POST['nombre']."<br />";
			echo "Usuario: ".$_POST['user']."<br />";
			echo "Password: ".$_POST['password']."<br />";
			echo "Email: ".$_POST['email']."<br />";
	}
	else{
		echo "Verifica que todos los campos están rellenados y que las dos contraseñas coinciden";
	}

?>