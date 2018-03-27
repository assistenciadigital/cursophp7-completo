<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn -> beginTransaction();

$stmt = $conn -> prepare("delete from tb_usuarios where idusuario = ?");

$id = 2;

$stmt -> execute(array($id));

$conn -> rollback(); // cancela transacao de exclusao / delete

$conn -> commit(); // confirma transacao de exclusao / delete

echo "Registro deletado com sucesso!";
?>