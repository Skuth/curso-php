<?php

$pasta = "arquivos";

if (!is_dir($pasta)) {
	mkdir($pasta);
	echo "Diretorio criado com sucesso!";
}else {
	echo "Diretorio já existe";
}

?>