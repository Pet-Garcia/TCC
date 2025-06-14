<?php

    function conexao(){
        // dados do banco de dados
        $database = "base";
        $usuario = "root";
        $senha = "";
        $local = "localhost";

        // estabelece a conexão
        return mysqli_connect($local, $usuario, $senha, $database); // NESSA EXATA ORDEM

    }

?>