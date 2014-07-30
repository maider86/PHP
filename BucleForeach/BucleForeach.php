<?php

	//Array predefinido
	$predefinido = array("elemento predefinido 1", "elemento predefinido 2");

	echo "Foreach del array predefinido: <br />";
	
	foreach ($predefinido as $elementos){
		echo $elementos."<br />";
	}

	//Array personalizado o asociativo
	$asociativo = array("clave1" => "elemento asociativo 1", "clave2" => "elemento asociativo 2");
	
	echo "<br />Foreach del array personalizado o asociativo: <br />";
	
	foreach ($asociativo as $claves => $elementos){
		echo $claves." = ".$elementos."<br />";
	}
	
?>