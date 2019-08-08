<?php

function soma(int ...$valores):string {

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(4, 7);
echo "<br>";
echo soma(1.5, 3.2);

?>