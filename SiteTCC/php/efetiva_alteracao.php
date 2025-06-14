<?php

    require "conexao.php";
    $id = $_POST["id"];
    $ISBN = $_POST["ISBN"];
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $editora = $_POST["editora"];
    $numEdicao = $_POST["numEdicao"];
    $dataPubli = $_POST["dataPubli"];
    $numPag = $_POST["numPag"];
    $valor = $_POST["valor"];

    $con = conexao(); // estabelece a conexão com o BD
    $sql = "update livro set ISBN='$ISBN', titulo='$titulo', autor='$autor', editora='$editora', numEdicao='$numEdicao', dataPubli='$dataPubli', numPag='$numPag', valor='$valor' where idl='$id'";
    mysqli_query($con,$sql); // Efetua a alteração
    mysqli_close($con);
    header("location:buscaFuncionarioLivro.php");

?>