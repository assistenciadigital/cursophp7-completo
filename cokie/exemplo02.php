<?php

if(isset($_COOKIE["NOME_DO_COKIE"])){

	$obj = (json_decode($_COOKIE["NOME_DO_COKIE"]));
	echo $obj -> empresa;
}

?>