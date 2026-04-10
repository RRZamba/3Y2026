
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<title>Login</title>

<style>
    body {
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        height: 100vh;
    }
    .card {
        border-radius: 15px;
    }
</style>

</head>

<body class="d-flex align-items-center justify-content-center">

<div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    
    <h3 class="text-center mb-4">Login Empresa</h3>

    <form action="Dologin.php" method="POST">

        <div class="mb-3">
            <input type="text" class="form-control" name="login" placeholder="Login" required>
        </div>

        <div class="mb-3">
            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
        </div>

        <div class="d-grid mb-3">
            <button class="btn btn-primary" type="submit">Entrar</button>
        </div>

        <div class="text-center mb-2">
            <a href="#">Esqueci a senha</a>
        </div>

        <hr>

        <div class="text-center">
            Não possui registro? 
            <a href="../cadastro_empresa/CadastroEmpresa.php">Cadastrar</a>
        </div>

        
            <div class="alert alert-danger text-center mt-3">
                
            </div>
        

    </form>
</div>

</body>
</html>