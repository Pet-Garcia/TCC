<?php
	require "conexao.php";
    $id = $_GET["id"]; //captura da url o id que deseja excluir
	$con = conexao(); // estabelece a conexão com o BD
	$sql = "delete from livro where idl = $id";
	$resultado = mysqli_query($con,$sql); // Efetua a busca
    header("location:busca.php");

?>