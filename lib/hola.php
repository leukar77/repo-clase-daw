<?php
	//Realizado por: Raquel Esteve <r.estevesanjuan@edu.gva.es>
	//El nombre por defecto es "mundo"
	require('HolaMundo.php');

	print "Introduce tu nombre:";
	$nombre= trim(fgets(STDIN));
	print new HolaMundo($nombre);
?>

