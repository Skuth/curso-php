<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$sql = "UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID";
$stmt = $conn->prepare($sql);

$login = "Flavio";
$password = "654321";
$id = "1";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado com sucesso";

?>