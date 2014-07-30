<?php

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$numero3 = $_POST['numero3'];
	$operacion = $_POST['operaciones'];
	
	if (isset($numero1) && !empty($numero1) &&
		isset($numero2) && !empty($numero2) &&
		isset($numero3) && !empty($numero3)){
	
		switch ($operacion){
			
			case sumar: echo $numero1." + ".$numero2." + ".$numero3." = ";
						echo $numero1 + $numero2 + $numero3;
						break;
						
			case restar: echo $numero1." - ".$numero2." - ".$numero3." = ";
						 echo $numero1 - $numero2 - $numero3;
						 break;
						 
			case multiplicar: echo $numero1." * ".$numero2." * ".$numero3." = ";
						 echo $numero1 * $numero2 * $numero3;
						 break;
						 
			case dividir: echo $numero1." / ".$numero2." / ".$numero3." = ";
						 echo $numero1 / $numero2 / $numero3;
						 break;
						 
			default: echo "No se ha podido realizar la operacion";
		}
	}
	else{
		echo "Se deben insertar todos los campos";
	}

?>