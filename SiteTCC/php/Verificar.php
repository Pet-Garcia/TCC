<?php
	require "conexao.php";
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $var = $_GET["var"];
	$con = conexao(); // estabelece a conexão com o BD
	$sql = "select email, senha from registro";
	$resultado = mysqli_query($con,$sql); // Efetua a busca
		if(mysqli_num_rows($resultado) > 0){ // mysqli_num_rows verifica qts registros encontrou através do comando sql
    	while($linha = mysqli_fetch_assoc($resultado)){ // percorre o resultado da busca e exibe os dados
            if($var == 1){
                if(($email == $linha["email"]) && ($senha == $linha["senha"])){
                    mysqli_close($con);
                    header("location:../html/MenuFuncionario.html");
                }
                else{
                    mysqli_close($con);
                    header("location:../html/Login.html");
                }
            
                }
                else{
                    if(($email == $linha["email"]) && ($senha == $linha["senha"])){
                        mysqli_close($con);
                        header("location:../html/Menu.html");
                    }
                    else{
                        mysqli_close($con);
                        header("location:../html/Login.html");
                    }
                }
            }
        }
        mysqli_close($con);
?>