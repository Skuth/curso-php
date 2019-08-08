<?php

function ola($text = "mundo", $periodo = "Bom dia"){

	return "Olá $text! $periodo! <br>";

}

echo ola("Flávio", "Boa noite");
echo ola("World", "Boa tarde");
echo ola("Mundo", "");

?>