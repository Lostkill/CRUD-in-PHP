<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando ...</title>
</head>
<body>
    <?php
	    include('conecta.php');
    ?>

<?php

	//Variaveis
	$situacao = $_POST['situacao'];

	//Inserindo no banco de dados
	$sql = $mysqli->prepare("UPDATE registros SET Situacao='$situacao' WHERE Trabalho='Sistema de cadastro'");
	$sql->bind_param('rg', $_POST['situacao']);
	$sql->execute();
	$sql->close();
?>

</body>

</html>