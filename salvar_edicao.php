<?php
    $id      = $_GET["id2"];
    $Situacao = $_POST["Situacao"]; 

    // Aqui você se conecta ao banco
    $conexao = new mysqli('localhost', 'root', '', 'veoowms');

    $query = "UPDATE regis SET Situacao ='$Situacao' WHERE regis.id = $id";
    $query = $conexao->query($query);
    mysqli_close();
    header("Location: update.php");
?>