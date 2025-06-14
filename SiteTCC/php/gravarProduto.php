<?php

    require "conexao.php";

    $ISBN = $_POST["ISBN"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $numEdicao = $_POST["numEdicao"];
    $dataPubli = $_POST["dataPubli"];
    $numPag = $_POST["numPag"];
    $valor = $_POST["valor"];


    $sql = "insert into Livro (ISBN, titulo, autor, editora, numEdicao, dataPubli, numPag, valor) values ('$ISBN', '$titulo', '$autor', '$editora', '$numEdicao', '$dataPubli', '$numPag', $valor)";

    if(mysqli_query(conexao(), $sql)){
        echo "Sucesso";
        header("location:../html/MenuFuncionario.html");
    }
    else{
        echo "Erro";
    }
    

?>