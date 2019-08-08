<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$sql = "SELECT * FROM tb_usuarios ORDER BY deslogin";

$stmt = $conn->prepare($sql);

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".ucwords($key)."</strong> : ".ucwords($value)."<br>";
	}
	echo "<hr>";
}

?>