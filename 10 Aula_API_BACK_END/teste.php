<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comidinhas - API</title>
    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>
<body class="bg-light">

<div class="container py-5">
    <div class="text-center mb-5">

        <h1 class="display-5 fw-bold">
                Comidinhas
        </h1>
    </div>


    <div id="mensagem"></div>
    <div class="row g-4">


        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        Cadastrar Comidinha
                    </h4>
                </div>
                <div class="card-body">
                    <form id="formcadastro">
                        <div class="mb-3">
                            <label class="form-label">
                                Nome
                            </label>
                            <input
                                type="text"
                                id="nome"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Descrição
                            </label>
                            <textarea
                                id="descricao"
                                class="form-control"
                                rows="4"required>
                            </textarea>
                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>
    </div>
</div>


<script>

    //Recuperando o formulário pelo ID e adicionando o evento de submit
    document.getElementById("formcadastro")
        .addEventListener("submit", function(event) {
            
            //Impede o envio padrão do formulário
            event.preventDefault();

            //Recuperando os valores dos campos
            let nome = document.getElementById("nome").value;
            let descricao = document.getElementById("descricao").value;

            //Enviando os dados para a API através do método POST
            fetch("apiRest.php", {
                method: "POST",

                //Montando o cabeçalho para informar que estamos enviando JSON
                headers: {
                    "Content-Type": "application/json"
                },

                //Montando o corpo da requisição com os campos do formulário
                body: JSON.stringify({
                    nome: nome,
                    descricao: descricao
                })
            })
            .then(response => {
                //Exibindo no console o status retornado pela API
                console.log("Status:", response.status);

                //Convertendo a resposta da API para JSON
                return response.json();
            })
            .then(dados => {

                //Exibindo no console a resposta recebida da API
                console.log("Resposta da API:", dados);

                //Exibindo a mensagem retornada pela API
                alert(dados.mensagem);

                //Limpando o formulário após o cadastro
                document.getElementById("formcadastro").reset();
            })
            .catch(erro => {

                //Exibindo o erro no console
                console.error("Erro:", erro);

                //Exibindo uma mensagem de erro para o usuário
                alert("Erro ao comunicar com a API.");
            });

        });
</script>
</body>

</html>