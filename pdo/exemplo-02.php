<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$sql = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)";
$stmt = $conn->prepare($sql);

$login = "Skuth";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

//$stmt->execute();

echo "Inserido com sucesso";

?>