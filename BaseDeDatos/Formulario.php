<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulario para insertar datos en una Base de Datos</title>
	</head>
	
	<body>
		<form action="Insert.php" method="post" name="form">
			Para insertar registros en la Base de Datos introduce el Nombre y el Password: <br/><br/>
			Nombre: <input type="text" name="nombre" /><br /><br />
			Password: <input type="password" name="password" /><br /><br />
			<input type="submit" value="insertar datos" /><br /><br />
		</form>
		<form action="Select.php" method="post" name="form">
			Para seleccionar un registro de la Base de Datos introduce el Nombre: <br/><br/>
			Nombre: <input type="text" name="nombre" /><br /><br />
			<input type="submit" value="seleccionar" /><br /><br />
		</form>
		<form action="Delete.php" method="post" name="form">
			Para eliminar un usuario de la Base de Datos introduce el Nombre: <br/><br/>
			Nombre: <input type="text" name="nombre" /><br /><br />
			<input type="submit" value="eliminar" /><br /><br />
		</form>
	</body>
</html>