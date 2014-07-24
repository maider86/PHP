<?php

	/*
	 * Operador de Concatenación:
	 * 	Punto (.)
	 */

	$texto1 = "Tengo ". 28 ." años";
	
	echo $texto1."<br />";
	
	$texto2 = "Tengo ";
	$texto2 .= 28;
	$texto2 .= " años";
	
	echo $texto2;

?>