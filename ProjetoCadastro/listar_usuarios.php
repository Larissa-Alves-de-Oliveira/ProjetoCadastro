<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM usuario";
        //mysqli_query => Executa um comando no banco de dados
        $result = mysqli_query($con,$sql);
        // mysqli_fetch_array => retorna apenas
        // Uma linha dos registros retornados 
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta de usuários:</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Altera</th>
            <th>Deleta</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                echo "<td>".$row['id_usuario']."</td>";
                echo "<td>".$row['nome_usuario']."</td>";
                echo "<td>".$row['email_usuario']."</td>";
                echo "<td>".$row['fone_usuario']."</td>";
                echo "<td><a href='altera.php?id_usuario=" .$row['id_usuario']. "'>Alterar</a></td>";
                echo "<td><a href='excluir_usuario_exe.php?id_usuario=" .$row['id_usuario']. "'>Deletar</a></td>";
                echo "</tr>";
            }while($row =mysqli_fetch_array($result));
        ?>
         <a href="index.php">Voltar</a>
    </table>
</body>
</html>