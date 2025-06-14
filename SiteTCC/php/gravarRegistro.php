<?php

    require "conexao.php";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $sql = "insert into registro (nome, sobrenome, email, senha) values ('$nome', '$sobrenome', '$email', '$senha')";

    if(mysqli_query(conexao(), $sql)){
        echo "Sucesso";
        header("location:../html/login.html");
    }
    else{
        echo "Erro";
    }
    

?>