<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword ='';
    $dbName = 'forms_stock';

    $conexao = new mysqli( $dbHost,$dbUsername,$dbPassword,$dbName); //Conectando ao BD


    // ----Teste para ver se foi conectado ao BD
    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else{
    //     echo "conexão feita com suceso.";
    // }
    //----------------

    

?>