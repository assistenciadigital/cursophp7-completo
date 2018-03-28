<?php

// cria arquivo
$file = fopen("teste.txt", "w+");
fclose ($file);

// remove arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";
?>