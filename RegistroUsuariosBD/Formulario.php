<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Formulario para registrar usuarios</title>
	</head>
	
	<body>
		<form action="Registrar.php" method="post" name="form">
			<table width="275" border="0">
				<tr>
					<td>NOMBRE: </td>
					<td><input type="text" name="nombre" /></td>
				</tr>
				<tr>
					<td>USUARIO:</td>
					<td><input type="text" name="user" /></td>
				</tr>
				<tr>
					<td>PASSWORD:</td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td>CONFIRMAR PASSWORD:</td>
					<td><input type="password" name="password2" /></td>
				</tr>
				<tr>
					<td>EMAIL:</td>
					<td><input type="text" name="email" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Registrar" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>