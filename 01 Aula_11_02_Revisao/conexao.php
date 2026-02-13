<?php
	//Conectando com o Server
	$con = mysqli_connect('127.0.0.1',
						   'root',
						   '',
						   'migo_db');  	

	//Verificando status da conexao
	if(!$con)
	{
		die('Erro ao conectar! OTÁRIO! :( ');
	}

?>