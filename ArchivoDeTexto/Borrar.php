<?php

	$file = $_POST['archivo'];
	
	unlink($file); //unlink: Para eliminar archivos
	echo "El archivo se ha eliminado correctamente";

?>