<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'msth1234';
    $dbName = 'concurso';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else 
    {
        echo "Conexão efetuada com sucesso";
    }
    */
    
?>