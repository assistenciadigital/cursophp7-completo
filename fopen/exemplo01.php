<?php

$file = fopen("log.txt", "a+");
fwrite($file, "Arquivo criado com sucesso! em: ".date("d/m/Y H:i:s")."\r\n");
fclose($file);

echo "Arquivo criado com sucesso!";

?>