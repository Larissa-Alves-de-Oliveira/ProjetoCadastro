<?php
    include('criasessao.php');
    //Limpa variáveis da sessão
    session_unset();
    //Destrói a sessão
    session_destroy();
    //Volta para a página inicial
    header('Location: index.php');
?>