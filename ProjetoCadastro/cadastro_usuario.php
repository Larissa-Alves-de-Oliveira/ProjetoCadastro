<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "Nome: $nome<br>Email: $email<br>Telefone: $fone<br>Senha: $senha<br>";

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, senha) VALUES ('".$nome."','".$email."','".$fone."','".$senha."')";

    echo $sql."<br>";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados cadastrados com sucesso!";
    }else{
        echo "Erro ao tentar cadastrar!";
    }

?>