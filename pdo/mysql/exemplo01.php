<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn -> prepare("insert into tb_usuarios(deslogin, dessenha) values(:LOGIN, :PASSWORD)");

$login = "JOSE";
$password = "2222";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();

echo "Registro incluido com sucesso!";
?>