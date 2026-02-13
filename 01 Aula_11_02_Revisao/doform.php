<?php
	//1) Recebendo os valores do form
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$curso = $_POST['curso'];

	//arquivos vem em partes distintas
	$arqTemp = $_FILES['foto']['tmp_name'];
	$arqNome = $_FILES['foto']['name']; 

	//Caminho onde será salvo o arquivo
	$caminho = "C:/wamp64/www/Projeto_11_02_Revisao/$arqNome";

	//Salvando a #$#¨@$@#% do arquito!!! :/
	if(@move_uploaded_file()) 
	{
	
	}
	else
	{

	}



?>