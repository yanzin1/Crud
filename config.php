<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-yan';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    
    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "conexao deu boa";
    }

?>