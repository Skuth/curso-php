<?php

	$pessoas = array();

	array_push($pessoas, array(
		'nome'=>'Flávio',
		'idade'=>17
	));
	array_push($pessoas, array(
		'nome'=>'Gabriel',
		'idade'=>14
	));

	echo json_encode($pessoas);

?>