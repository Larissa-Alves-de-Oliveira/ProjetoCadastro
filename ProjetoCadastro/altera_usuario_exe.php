<?php
    include('conexao.php');
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = 'fotos/';
        $extensao = strtolower(substr($_FILES['foto']['name'],-4));
        $nome_foto = $pasta_destino . date('Ymd-hist') . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email']; //Recebendo valores do campo formulário
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>Alteração de dados</h1>";
    echo "<p>Usuário: $nome</p>";
    $sql = "UPDATE usuario SET
            nome_usuario='$nome',  
            email_usuario='$email',
            fone_usuario='$fone',
            senha='$senha',
            foto='$nome_foto'
            WHERE id_usuario=$id_usuario"; 
            //Comando que funciona apenas no banco de dados
    echo $sql;
    $result = mysqli_query($con,$sql); //Envia as informações para o banco de dados
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: $msqli_erro($con)"
?>
<a href="index.php">Voltar</a>