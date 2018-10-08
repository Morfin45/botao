<?php
    include 'conexao.php';
    $sql = "CREATE DATABASE IF NOT EXISTS bd_botao;";

    $criar = mysqli_query($conexao,$sql);

    mysqli_select_db($conexao,"bd_botao");


    $criarTabela = "CREATE TABLE IF NOT EXISTS tb_usuario( 
        usu_id int (11) AUTO_INCREMENT not null, 
        usu_nome varchar (150) not null, 
        
        PRIMARY KEY(usu_id) )";


    $results = mysqli_query($conexao,$criarTabela) or die (mysqli_error());
    header("Location: principal.php");
?>