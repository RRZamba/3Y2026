<?php
    
    //0) Conexao do DB
	include('conexao.php');

	//1) Recebendo os valores do form
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$curso = $_POST['curso'];

	//arquivos vem em partes distintas
	$arqTemp = $_FILES['foto']['tmp_name'];
	$arqNome = $_FILES['foto']['name']; 

	//Caminho onde será salvo o arquivo
	$caminho = "C:/wamp64/www/Projeto_11_02_Revisao/imagens/$arqNome";

	//Variável para montar a query de insert
	$query = "INSERT INTO migo(
		 nome,sobrenome,curso,foto)
	     VALUES('$nome','$sobrenome',
	     	  '$curso','$caminho')";

	//Executando o sql
	$result = mysqli_query($con,$query);

	//Verificando insert
	if(!$result)
	{
		echo "<h3>Erro ao inserir no DB</h3>";
		echo "<h4>Falar com o ADM!!!</h4>";
		echo "<h4> $query </h4>"	;	
		die();
	}


	//Salvando a #$#¨@$@#% do arquito!!! :/
	if(@move_uploaded_file($arqTemp,$caminho)) 
	{	
		//Arquivo salvo
		echo "<h3>Upload com sucesso, bebê!</h3>";
		echo "<br>";
		echo "Salvo em: $caminho";
	}
	else
	{
		echo "Erro ao fazer upload...<br>";
		echo "$caminho <br>"
		echo "Entrar em contato com o suporte";
		echo "<h3>SEU OTÁRIO!!!</h3>";
	}
?>



  
  A partir do projeto desenvolvido em sala de aula, construa uma nova página em php que faça um select de todas as informações do banco , incluindo a imagem e mostre na tela