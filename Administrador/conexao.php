<?php
	$servidor="localhost";
	$banco="filme";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;filme=$banco",$usuario,$senha);		
?>