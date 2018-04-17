<?php
	// autoload psr4
	require("vendor/autoload.php");
	use function brain\Functions\save;
	// captura de dados `msg` passado na url
	$msg = $_GET["msg"] : $_GET["msg"] ? "Mensagem não enviada";
	// função referenciada pela `use`
	save($msg);
