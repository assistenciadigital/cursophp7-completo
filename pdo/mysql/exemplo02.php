<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn -> prepare("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

$login = "JOSIMAR";
$password = "77777";
$id = 1;

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);
$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "Registro alterado com sucesso!";
?>