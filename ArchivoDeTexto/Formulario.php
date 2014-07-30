<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulario para guardar datos en un Archivo de Texto</title>
	</head>
	
	<body>
		<form action="Guardar.php" method="post" name="form">
			Nombre: <input type="text" name="nombre" /><br /><br />
			Comentario: <textarea name="comentario"></textarea><br /><br />
			<input type="submit" value="guardar datos"><br /><br />
		</form>
		<form action="Borrar.php" method="post" name="delete">
			Archivo a eliminar: <input type="file" name="archivo" /><br /><br />
			<input type="submit" value="borrar" />
		</form>
	</body>
</html>