<?php 
    $server = "localhost";
    $user = "root";
    $password = "root";
    $database = "bd_estoque";

    $conexao = new mysqli($server, $user, $password, $database);

    if ($conexao)
    {
        echo "deu certo!";
    }
?>