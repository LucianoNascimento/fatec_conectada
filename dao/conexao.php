<?php

	$hostDB = "localhost";
	$usuarioDB = "root";
	$senhaDB = "";
	$bancoDB = "fatecconectada";
	
	$dbcon = new MySQLi("$hostDB","$usuarioDB","$senhaDB","$bancoDB");

	/*
	if ($dbcon->connect_error) {
		echo "CONEXÃO FAIL";
	}else {
		echo "CONEXÃO OK";
	}
	*/

	mysqli_query($dbcon , "SET NAMES UTF8");	
?>