<?php
	
	include_once("./admin/Email.php");
	include_once("./admin/EmailDAO.PHP");
	
	$email = new Email();
	$emailDAO = new EmailDAO();	

	include_once("./admin/Novos.php");
	include_once("./admin/NovosDAO.php");
	
	$novos = new Novos();
	$novosDAO = new NovosDAO(); 

	if (isset($_POST['emailCad'])) {

		$email->setEmail($_POST['emailCad']);

		if ($emailDAO->InsereEmail($email)) {
			$emailForm = $_POST['emailCad'];
			$assunto = "Cadastro concluido";
			$mensagem = "Cadastro de Email realizado com sucesso! <br> Você recebera notifiações a cada nova atualização ";	
		
			$to = "dk.joao12@gmail.com";
			$subject = "$assunto";
			$message = "$mensagem";
			$header = "MIME-Version: 1.0 \r\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$header .= "From $emailForm";

			mail($to, $subject, $message, $header);
		
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<!-- apenas teste-->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Playfair+Display" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" integrity="sha256-gVCm5mRCmW9kVgsSjQ7/5TLtXqvfCoxhdsjE6O1QLm8=" crossorigin="anonymous" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha256-399DNRyfIpWIy1ZV0KmEIIuIQ5sBHdLu9MBtVHrNtt8=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		new WOW().init();
	</script>
</head>
<body>

<nav class="nav-menu">
	<div class="logo">
		<h1>Auto Sports</h1>
	</div>
	<div class="lig">
		<h4>LIGUE JÁ | (84) 94002-8922</h4>
	</div>
</nav>
<div class="bx-menu">
	<ul class="ul-nav">
		<li>
			<a href="index.php">HOME |</a>
		</li>
		<li>
			<a href="pages/novos.php">NOVOS |</a>
		</li>
		<li>
			<a href="pages/seminovos.php">SEMINOVOS |</a>
		</li>
		<li>
			<a href="pages/pecas.php">PEÇAS |</a>
		</li>
		<li>
			<a href="pages/assist.php">ASSISTENCIA TECNICA |</a>
		</li>
		<li>
			<a href="pages/consorcio.php">CONSÓRCIO |</a>
		</li>
		<li>
			<a href="pages/contato.php">CONTATO |</a>
		</li>
	</ul>
</div>

<section>
	<div class="header">
	
	</div>
</section>

<section>
	<div class="content-h">
		<div class="col-h">
			<p class="txt-col-h">Auto Sports</p>
		</div>
	</div>
</section>

<section>
	<div class="nv-smv">
		<div class="seminovos-h wow fadeInRight">
			<a href="pages/seminovos.php" class="er"><h1 class="h-semi">Seminovos</h1></a>
			<p class="header-sn">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
			</p>
		</div>
		<div class="novos-h">
			<a href="pages/novos.php" class="er"><h1 class="h-novos">Novos</h1></a>
			<p class="header-pn">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
			</p>
		</div>
	</div>
</section>

<section>
	<div class="ofertas">
		<div class="h-txt-ofertas">
			<h1 class="txt-linha-h1">Linha Novos</h1>
			<p class="txt-linha-p">Conheça nossas melhores ofertas</p>
		</div>
		<div class="carros-o">
			<?php

				$teste = $novosDAO->ListarCarrosl();
							
				for ($i=0; $i < count($teste); $i++) {

					echo '
						<div class="itemCar">
							<img src="./admin/carNovos/'.$teste[$i]['nomeImage'].'" class="img-car-index">
							<h4>'.$teste[$i]['nome'].'</h4>
						</div>
					';

				}

			?>
			
		</div><br>
		<div class="div-btn-car">	
			<a href="pages/novos.php" class="btn-car">TODA A LINHA</a>
		</div>
	</div>
</section>


<section>
	<div class="mais-p">
		<div class="header-nos">
			<h1 class="h1-header">Porque Nós?</h1>
			<p class="p-header">Saiba porque temos as melhores ofertas</p>
		</div>
		<div class="geral-items">
			<div class="item-carac">
				<img src="img/teste1.gif" class="img-carac">
				<h3 class="h3-carac">Agilidade</h3>
			</div>
			<div class="item-carac">
				<img src="img/teste2.gif" class="img-carac">
				<h3 class="h3-carac">Agilidade</h3>
			</div>
			<div class="item-carac">
				<img src="img/teste4.gif" class="img-carac">
				<h3 class="h3-carac">Agilidade</h3>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="cadEmail">
		<div class="geral-cad">
			<div class="pt-cad-1">
				<h2><span class="pt-txt-1">Cadastre seu E-mail</span><span class="pt-txt-2"> e receba ofertas e novidades exclusivas<br> sobre nossa linha</span></h2>

				<form id="formCad" method="post">
					<input type="email" name="emailCad" id="emailCad" required>

					<input type="submit" value="Cadastrar" id="sand">
				</form>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="final">
		<div class="logo-wolk">
			<img src="img/Logo_Volkswagen.png">
		</div>
		<div class="info-extra">
			<div class="pt-1-extra">
			
				<h1>Ainda</h1>
				<p>
					<a href=""><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
				</p>
				<p>
					<a href=""><i class="fa fa-users" aria-hidden="true"></i> Quem Somos</a>
				</p>
				<p>
					<a href=""><i class="fa fa-phone" aria-hidden="true"></i> Fale Conosco</a>
				</p>
				<p>
					<a href=""><i class="fa fa-film" aria-hidden="true"></i> Videos</a>
				</p>	

				<h1>Carros</h1>
				<p>
					<a href=""><i class="fa fa-certificate" aria-hidden="true"></i> Novos</a>
				</p>
				<p>
					<a href=""><i class="fa fa-car" aria-hidden="true"></i> Seminovos</a>
				</p>
				<p>
					<a href=""><i class="fa fa-eercast" aria-hidden="true"></i> Peças</a>
				</p>
				<p>
					<a href=""><i class="fa fa-handshake-o" aria-hidden="true"></i> Consorcio</a>
				</p>				

			</div>
			<div class="pt-2-f">
				<h4>Horários de Funcionamento</h4>
				
				<h4>Veiculos Novos</h4>
				<p>Segunda a Sexta - 07:30 às 18:30<br>
				Sábado - 08:00 às 13:00</p>
				
				<h4>Veiculos Seminovos</h4>
				<p>Segunda a Sexta - 08:00 às 18:00
				<br>Sábado - 08:00 às 13:00
				
				<h4>Assistencia tecnica</h4>
				<p>Segunda a Sexta - 07:30 às 17:30
				<br>Sábado - 08:00 às 12:00</p>

			</div>
		</div>
		<div class="coisas-centro">
			<div class="center"><br><br>
				<div class="p1-1-c">
					<h4>Desenvolvido por grupo6 &copy Copyright 2019</h4>
				</div>
			</div>
		</div>
	</div>
</section>

</body>
</html>