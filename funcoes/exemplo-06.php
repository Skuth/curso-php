<?php

$pessoa = array(
	'nome'=>'Flávio',
	'idade'=>17
);

foreach ($pessoa as $value) {
	if (gettype($value) === 'integer') {
		$value += 10;
	}
	echo $value.'<br>';
}

print_r($pessoa);

?>