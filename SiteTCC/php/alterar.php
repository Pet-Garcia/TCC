<?php

    function buscarDados($id){
        require "conexao.php";
        $con = conexao(); // estabelece a conexão com o BD
        $sql = "select * from livro where idl = '$id'";
        $res = mysqli_query($con,$sql); // Efetua a busca
        mysqli_close($con);
        return $res;
    }

    $resultado = buscarDados($_GET["id"]);
    echo mysqli_num_rows($resultado);
    $linha = mysqli_fetch_assoc($resultado);
    print_r($linha);
    $id = $linha["idl"]; //Tem que estar igual as variaveis do BD
    $ISBN = $linha["ISBN"];
    $titulo = $linha["titulo"];
    $autor = $linha["autor"];
    $editora = $linha["editora"];
    $numEdicao = $linha["numEdicao"];
    $dataPubli = $linha["dataPubli"];
    $numPag = $linha["numPag"];
    $valor = $linha["valor"];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alteração</title>
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
        <form name="frm" method="post" action="efetiva_alteracao.php">
                ID: <input type="text" name="id" readonly value="<?php echo $id;?>"><br>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="ISBN" name="ISBN" placeholder="Digite o codigo ( ISBN ) do livro" value="<?php echo $ISBN;?>">
                    <label for="ISBN" class="form-label">Digite o codigo ( ISBN ) do livro:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o seu titulo do Livro" value="<?php echo $titulo;?>">
                    <label for="titulo" class="form-label">Digite o titulo do livro:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="autor" name="autor" placeholder="Digite o nome do autor" value="<?php echo $autor;?>">
                    <label for="autor" class="form-label">Digite o nome do autor:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="editora" name="editora" placeholder="Digite o nome da editora" value="<?php echo $editora;?>">
                    <label for="editora" class="form-label">Digite o nome da editora:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="numEdicao" name="numEdicao" placeholder="Digite o numero da edição" value="<?php echo $numEdicao;?>">
                    <label for="numEdicao" class="form-label">Digite o número da edição:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="dataPubli" name="dataPubli" placeholder="Digite a data de publicação" value="<?php echo $dataPubli;?>">
                    <label for="dataPubli" class="form-label">Digite a data de publicação:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="numPag" name="numPag" placeholder="Digite o número de páginas" value="<?php echo $numPag;?>">
                    <label for="numPag" class="form-label">Digite o número de páginas:</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="valor" name="valor" placeholder="Digite o valor do livro" value="<?php echo $valor;?>">
                     <label for="valor" class="form-label">Digite o valor do livro:</label>
                </div>
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>