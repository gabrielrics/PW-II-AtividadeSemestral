<?php
	$servidor="localhost";
	$banco="cadastro";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;cadastro=$banco",$usuario,$senha);		
?>