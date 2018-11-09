<!DOCTYPE html>
<html lang="en">

<head>
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
      $conexao = new mysqli('localhost', 'root', '', 'veoowms');
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
			            Olá <b><?php echo $_SESSION['nome_usuario']?></b>, <a id="logout" href="login/sair.php">clique aqui</a> para sair.
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
	
    
    <div align="center" class="container">
    <h1><font id="Neo"><?php echo $_SESSION['nome_usuario']?> algo saiu do esperado ? ligue para o nosso suporte agora mesmo :D</font></h1>
    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
    <div id="SkypeButton_Call_temario6_1">
        <script type="text/javascript">
            Skype.ui({
                "name": "call",
                "element": "SkypeButton_Call_temario6_1",
                "participants": ["temario6"],
                "imageSize": 32
            });
        </script>
    </div>

    <h1><font id="Neo">Você também pode estar nos telefonando :)</font></h1>
        <div align="center">
                    <p id="social">                        
                        <font>E-mail:<font face="Arial"> veooow@veoow.com</font></font>
                        <i id="icon-sup" class="glyphicon glyphicon-envelope"></i>
                    <p>                        
                        <font>Telefone:<font face="Arial">(31) 98954-9023</font></font>
                        <i id="icon-sup" class="glyphicon glyphicon-phone"></i>
                    </p>
                </p>
            </div>
    </div>  
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>

</body>

</html>