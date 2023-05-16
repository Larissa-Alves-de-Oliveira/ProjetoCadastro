<?php
    include('conexao.php');
    $id = $_GET['id_usuario'];

    $sql = "DELETE from usuario where id_usuario ='$id'"; 
            //Comando que funciona apenas no banco de dados
    echo $sql;
    $result = mysqli_query($con,$sql); //Envia as informações para o banco de dados
    if($result)
        echo "Dados excluídos com sucesso!<br>";
    else
        echo "Erro ao excluir dados: $msqli_erro($con)";
?>
<a href="index.php">Voltar</a>