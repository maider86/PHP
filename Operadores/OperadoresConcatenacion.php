<?php

	/*
	 * Operador de Concatenaci�n:
	 * 	Punto (.)
	 */

	$texto1 = "Tengo ". 28 ." a�os";
	
	echo $texto1."<br />";
	
	$texto2 = "Tengo ";
	$texto2 .= 28;
	$texto2 .= " a�os";
	
	echo $texto2;

?>