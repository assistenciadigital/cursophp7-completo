<?php

$cep = "78048498";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r("CEP: ".$data["cep"]."<br/>Endereco: ".$data["logradouro"]."<br/>Complemento: ".$data["complemento"]."<br/>Bairro: ".$data["bairro"]."<br/>Localidade: ".$data["localidade"]."<br/>UF: ".$data["uf"]."<br/>IBGE: ".$data["ibge"]); // exibe somente o dados que selecionar


?>