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
	$empregado = $_POST['empregado'];
	$trabalho = $_POST['trabalho'];
	$situacao = $_POST['situacao'];

	//Inserindo no banco de dados
	$sql = $mysqli->prepare("INSERT INTO regis(Empregado, Trabalho, Situacao) VALUES('$empregado', '$trabalho', '$situacao')");
	$sql->bind_param('rg', $_POST['empregado'], $_POST['trabalho'], $_POST['situacao']);
	$sql->execute();
	$sql->close();
	header('location: ' . dirname( $_SERVER['PHP_SELF'] ) . 'create.php');
?>

</body>

</html>