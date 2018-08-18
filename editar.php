<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Teste -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Veoow MS!</title>
    <link id="favicon" rel="icon" type="image/png" href="img/Ico-zilla.png" />

	<!-- CSS/Js/Includes -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css?c=10" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php
        // Inclui o arquivo de configuração
        include('login/config.php');
 
        // Inclui o arquivo de verificação de login
        include('login/verifica_login.php');

        // Se não for permitido acesso nenhum ao arquivo
        // Inclua o trecho abaixo, ele redireciona o usuário para 
        // o formulário de login
        include('login/redirect.php');
    ?>

    <?php
      $conexao = new mysqli('mysql.hostinger.com.br', 'u854643412_veoow', '75321489', 'u854643412_veoow');
    ?>
</head>

<body class="body-custom">

	<nav class="navbar navbar-inverse  navbar-customized">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand navbar-brand-customized fadeIn" id="VMS" href="#">
					<font id="Neo">Veoow <span>MS!</span></font>
				</a>
			</div>

            <div align="right" class="navbar-collapse collapse navbar-collapse-customized">
                <section id="user" class="user">  
			            Olá <b>Pablo</b>, <a id="logout" href="login/sair.php">clique aqui</a> para sair.
                </section> 
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>

    <div class="container" id="menu" align="center">
        <div class="row">
                <ul class="nav navbar-nav col-xs-3 col-md-12">
                    <li class="col-xs-3 col-md-4" id="menu">
                        <a align="center" class="btn-panel" id="btn" href="panel.php">
                           Home 
                        </a>
                    </li>
                    <li class="col-xs-3 col-md-4" id="menu">
                        <a class="button btn-panel" id="btn" href="suporte.php">
                            Suporte
                        </a>
                    </li>

                    <div class="col-xs-3 col-md-4">
				        <div class="dropdown">
                            <button class="btn  dropdown-toggle btn-panel-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="
                                 padding-right: 0px;">Serviços<span class="caret"></span>
                            </button>
                     <ul class="dropdown-menu btn-panel-dropdown" id="drop" aria-labelledby="dropdownMenu1">
                        <li><a href="create.php">Create</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                    </div>
			    </div>
                </ul>
        </div>
            <!--/.nav-collapse -->

            <div class="container">
                <h2 class="form-signin-heading" align="center"><font id="Neo"><b>Faça as mudanças necessárias</b></font></h2>
                <hr class="underline">
            </div>
        
          <?php
                // Executa uma consulta
                $empregado = $_SESSION['nome_usuario'];
                $id2 = $_GET['id2'];
                $sql = "SELECT `id`, `Empregado` , `Trabalho` , `Situacao` FROM `regis` WHERE ID LIKE '%$id2%' ";
                $query = $conexao->query($sql);
                while ($dados = $query->fetch_assoc()) {
                    $id = $dados["id"];
                    $empregado = $dados["Empregado"];
                    $trabalho = $dados["Trabalho"];
                    $Situacao = $dados["Situacao"];
                    
                    echo"
                    <form id=\"form1\" name=\"form1\" method=\"post\" action=\"salvar_edicao.php\">
                    <input name=\"id\" type=\"text\" readonly=\"readonly\" id=\"id\" value=\"$id\" size=\"35\"/><br>
                    <input name=\"Empregado\" type=\"text\" readonly=\"readonly\" id=\"id\" value=\"$empregado\" size=\"35\"/><br>
                    <input name=\"Trabalho\" type=\"text\" readonly=\"readonly\" id=\"id\" value=\"$trabalho\" size=\"35\"/><br>
                    <input name=\"Situacao\" type=\"text\" id=\"id\" value=\"$Situacao\" size=\"35\"/><br><br>
                    <input type=\"submit\" onclick=\"return confirm('Deseja mesmo editar esse registro?');\" name=\"Submit\" value=\"SALVAR ALTERAÇÕES\" class=\"btnNew\"/>
                    <br>
                    </form>
                    ";                    
                }
        ?>  
        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>

</body>

</html>