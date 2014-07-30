<?php

	$variable = "HOLA";
	
	switch ($variable){
		case 1: echo "El valor de la variable es UNO";
				break;
		case 10: echo "El valor de la variable es DIEZ";
				 break;
		case hola: echo "El valor de la variable es 'hola'";
				   break;
		default: echo "No es ninguna de las anteriores";
	}

?>