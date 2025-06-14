<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logar</title>
        <!--Icone na Janela-->
        <link rel="shortcut icon" href="../img/Livro3.ico" type="image/x-icon">
        <!--CSS BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!--JS BOOTSTRAP-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
        <!--CSS-->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!--Barra do Menu Inicio-->
        <nav class="navbar bg-dark sticky-top bg-body-tertiary">
            <form class="container-fluid justify-content-center">
                <a href="../html/Registro.html">
                    <button class="btn btn-success me-3" type="button">Registrar</button>
                </a>
                <a href="../html/Login.html">
                    <button class="btn btn-success me-3" type="button">Entrar</button>
                </a>
                <a href="../html/LoginFuncionario.html">
                    <button class="btn btn-success me-3" type="button">Funcionario</button>
                </a>
                <a href="../html/Creditos.html">
                    <button class="btn btn-success me-3" type="button">Creditos</button>
                </a>
            </form>
        </nav>
        <!--Barra do Menu Fim-->
        <div class="container col-11 col-md-9" id="form-container">
            <div class="row align-items-center gx-5">
        <!--LISTA INICIO-->
                <div class="order-md-2">
					<h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Lista de Livros:</h2>
                    <?php
						require "conexao.php";
						$con = conexao(); // estabelece a conexão com o BD
						$sql = "select idl, ISBN, titulo, autor, editora, numEdicao, dataPubli, numPag, valor from livro";
						$resultado = mysqli_query($con,$sql); // Efetua a busca
						if(mysqli_num_rows($resultado) > 0){ // mysqli_num_rows verifica qts registros encontrou através do comando sql
							echo "<table border=\"1\" width=\"100%\" align=\"center\">";
                                echo "<tr>";
								echo "<td width=\"5%\">idl</td>";
								echo "<td width=\"5%\">ISBN</td>";
								echo "<td width=\"20%\">Titulo</td>";
								echo "<td width=\"20%\">Autor</td>";
								echo "<td width=\"20%\">Editora</td>";
                                echo "<td width=\"20%\">NumEdicao</td>";
                                echo "<td width=\"20%\">DataPublicacao</td>";
                                echo "<td width=\"20%\">NumPaginas</td>";
								echo "<td width=\"20%\">Valor</td>";
                                echo "<td width=\"5%\">Excluir</td>";
                                echo "<td width=\"5%\">Alterar</td>";
								echo "</tr>";
							while($linha = mysqli_fetch_assoc($resultado)){ // percorre o resultado da busca e exibe os dados
								echo "<tr>";
								echo "<td width=\"5%\">".$linha["idl"]."</td>";
								echo "<td width=\"5%\">".$linha["ISBN"]."</td>";
								echo "<td width=\"20%\">".$linha["titulo"]."</td>";
								echo "<td width=\"20%\">".$linha["autor"]."</td>";
								echo "<td width=\"20%\">".$linha["editora"]."</td>";
                                echo "<td width=\"20%\">".$linha["numEdicao"]."</td>";
                                echo "<td width=\"20%\">".$linha["dataPubli"]."</td>";
                                echo "<td width=\"20%\">".$linha["numPag"]."</td>";
								echo "<td width=\"20%\">R$".$linha["valor"]."</td>";
								echo "</tr>";
							}
							echo "</table>";
						}
						mysqli_close($con); // finaliza a conexão com o BD
					?>
                </div>
        <!--LISTA FIM-->
        <!--Ir para Menu Inicio-->
                        <div class="col-12" id="link-container">
                            <a href="MenuFuncionario.html">Voltar</a>
                        </div>
        <!--Ir para Menu Fim-->
            </div>
        </div>
    </body>
</html>
