<?php
	session_start();

	session_destroy(); 

	#header("Location: http://www.floatsistemas.com/"); 
	
	//direciona para a pagina inicial
	header('location:../index.php');
	
	exit; 
?>