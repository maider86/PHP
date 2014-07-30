<?php

	$file = fopen("archivo.txt", "a") //a: Crear el archivo si no existe. Si ya existiera, AÑADE el texto al final del archivo
	or die("Problemas al crear el archivo");
	
	fwrite($file, "Datos: ");
	fwrite($file, "\n");
	fwrite($file, $_POST['nombre']);
	fwrite($file, "\n");
	fwrite($file, $_POST['comentario']);
	fwrite($file, "\n");
	fwrite($file, "---------------------------- \n\n");
	fclose($file);
	echo "Los datos se han guardado correctamente";

?>