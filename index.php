<?php
    // Inicia a sessão
    session_start();
?>

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
	<link href="style.css?c=8" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-custom">

	<nav class="navbar navbar-inverse  navbar-customized">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
				<a class="navbar-brand navbar-brand-customized fadeIn" id="VMS" href="#">
					<font id="Neo">Veoow <span>MS!</span></font>
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse navbar-collapse-customized">
				<form class="navbar-form navbar-right" action="panel.php" method="POST">
					<div class="form-group group-customized">
						<input name="usuario" type="text" placeholder="Email" class="form-control" id="login" required>
					</div>
					<div class="form-group group-customized">
						<input name="senha" type="password" placeholder="Password" class="form-control" id="login" required>
					</div>
					<button type="submit" class="btn btn-success">Login</button>
                
                        <?php if ( ! empty( $_SESSION['login_erro'] ) ) :
                        ?>
                            <td style="color: red;"><?php echo $_SESSION['login_erro'];?></td>
                            <?php $_SESSION['login_erro'] = ''; ?>
                        <?php endif; 
                        ?>
				</form>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>

	<!-- ABOUT -->

	<div class="container" align="center" id="about">
		<img id="veoow_estudios" src="img/veoow_estudios.png">
		<p id="about_text">
			<font><span>Veoow Management System(Veoow MS)</span>, é um sistema cuja a função é ajudar na organização<br> de sua micro, média
				e grande empresa, de forma simples, rápida e éficaz dando a oportunidade de que você possa acompanhar o progresso dos
				serviços que tem sido executados dentro de sua empresa.</font>
		</p>
		<hr class="linha">
	</div>

	<br>

	<div class="section-title" align="center" id="imagens">
		<h2>
			<font id="Neo">IMAGENS</font>
		</h2>
		<hr class="underline">
	</div>

	<!-- IMAGENS -->

	<br>
	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-4">
				<a href="img/Home.jpg" data-lightbox="image-1" data-title="Saiba e conheça o que tem sido feito em sua empresa" class="thumbnail">
					<img src="img/Home.jpg">
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a href="img/Registro_de_serviços.jpg" data-lightbox="image-1" data-title="Saiba quais são os serviços que estão sendo feitos e a situação em que se encontram" class="thumbnail">
					<img src="img/Registro_de_serviços.jpg">
				</a>
			</div>

			<div class="col-xs-6 col-md-4">
				<a href="img/Suporte.jpg" data-lightbox="image-1" data-title="O suporte da veoow studios está sempre disposto a ajudar" class="thumbnail">
					<img src="img/Suporte.jpg">
				</a>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>

	<!-- CONTRATE-NOS -->
	<div class="container" align="center">
		<button type="button" class="btn btn-contrate"><a id="btn-link" href="http://veoow.com.br/contact.html">CONTRATE-NOS</a></button>
	</div>

	<footer class="footer">
		<div class="container">
			<a class="navbar-brand navbar-brand-customized brand-footer" id="VMS" href="index.html">
				<font id="Neo">Veoow <span>MS!</span></font>
			</a> 
            <div align="right">
                    <p id="social">                        
                        <font>E-mail:<font face="Arial"> veooow@veoow.com</font></font>
                        <i id="icon" class="glyphicon glyphicon-envelope"></i>
                    <!---<p>                        
                        <font>Telefone:<font face="Arial">(31) 98954-9023</font></font>
                        <i id="icon" class="glyphicon glyphicon-phone"></i>
                    </p>-->
					
                </p>
            </div>
        </div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>

</body>

</html>