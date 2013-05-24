<?php

	// Conecta a la base de datos
	$DB_NAME = 'vendeloya';
	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASS = 'e61579134';
	
	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	
	if (mysqli_connect_errno()) {
		printf("Fallo en la conexion a DB: %s\n", mysqli_connect_error());
		exit();
	}
	
	function vnum($val) {
		if (!is_numeric($val)) {
			$val = 330;
		}
		return ($val);
	}

?>