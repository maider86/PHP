<?php

	$archivo = fopen("archivo.txt", "r") //r: Para leer un archivo
	or die ("Problemas al abrir el archivo");
	
	while(!feof($archivo)){ //feof: Final del archivo
		$datos = fgets($archivo);
		$saltodelinea = nl2br($datos); //nl2br: Permite leer los saltos de línea en el navegador
		echo $saltodelinea;
	}
	
?>