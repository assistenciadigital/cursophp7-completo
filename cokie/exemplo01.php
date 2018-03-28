<?php

$data = array("empresa" => "Assistencia Digital");

setcookie("NOME_DO_COKIE", json_encode($data), time() + 3600);

echo "Cokie criado com sucesso!";

?>