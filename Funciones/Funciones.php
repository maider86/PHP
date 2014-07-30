<?php

	function funcion ($parametro1, $parametro2, $parametro3){
		$suma = $parametro1 + $parametro2 + $parametro3;
		$multiplicacion = $suma * 2;
		return $multiplicacion;
	}
	
	echo "El resultado es: ".funcion(5, 2, 2);

?>