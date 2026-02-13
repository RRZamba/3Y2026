<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

	<title>Cadastrinho chuchu beleza!!!</title>
</head>
<body>
	<div class="container">
		<h3>Cadastre seu melhor migo!!!</h3>

		<form action="doform.php" method="POST" >

			<!--         NOME           -->
			<label class="form-label">Nome:</label>
			<input type="text" name="nome" class="form-control"
			placeholder="Digite o nominho">

			<!--         SOBRENOME           -->
			<label class="form-label">Sobrenome:</label>
			<input type="text" name="sobrenome" class="form-control"
			placeholder="Digite o sobrenominho">

			<!--         NOME DO CURSO          -->
			<label class="form-label">Curso da Etec:</label>
			<input type="text" name="curso" class="form-control"
			placeholder="Digite o cursinho">

			<!--            IMAGEM      -->
			<label class="form-label">Foto do migo!!! :)</label>
			<input type="file" name="foto" class="form-control" 
			accept="image/">

			<!--            BOTÃO      -->
			<button type="submit" class="btn btn-success">
				Salvar o migo!!! <3 
			</button>




			
		</form>
		
	</div>

</body>
</html>