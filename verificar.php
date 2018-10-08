<?php
    include 'conexao.php';

    $sql= "SHOW DATABASES LIKE 'bd_botao'";

    $buscar = mysqli_query($conexao,$sql);
    $verificar = mysqli_num_rows($buscar);
    
    
    if($verificar == 0){
        header("Location: index.php");
    }elseif($verificar == 1){
        header("Locarion: principal.php");
    }
?>