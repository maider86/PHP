<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Calculadora</title>
	</head>
	
	<body>
		<form action="Procesar.php" method="post" name="calculadora">
			<label>Introduce los valores:</label><br />
			<input type="text" name="numero1" /><br /><br />
			<input type="text" name="numero2" /><br /><br />
			<input type="text" name="numero3" /><br /><br />
			<label>Selecciona la operacion:</label>
			<select name="operaciones">
				<option value="sumar">Sumar</option>
				<option value="restar">Restar</option>
				<option value="multiplicar">Multiplicar</option>
				<option value="dividir">Dividir</option>
			</select>
			<br />
			<br />
			<input type="submit" value="Ver resultado" />
		</form>
	</body>
</html>