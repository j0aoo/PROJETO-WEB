<?php

	include_once("../admin/Orcamento.php");
	include_once("../admin/OrcamentoDAO.php");
	
	include_once("../admin/Seminovos.php");
	include_once("../admin/SeminovosDAO.php");

	$orcamento = new Orcamento();
	$orcamentoDAO = new OrcamentoDAO();
	
	$seminovos = new Seminovos();
	$seminovosDAO = new SeminovosDAO();

	if (isset($_POST['nome'])) {
	
		$orcamento->setNome($_POST['nome']);
		$orcamento->setTelefone($_POST['tel']);
		$orcamento->setEmail($_POST['email']);

		$orcamentoDAO->InsereOrcamento($orcamento);
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/styleN.css">

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

	<script
  	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

    <script
  	src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  	integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  	crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(function(){
            $("#accordion").accordion();
        });
	</script>

</head>
<body>

<?php
	include('menu.php');
?>

<?php

	$teste = $seminovosDAO->ListaUnica($_GET['id']);
				
	for ($i=0; $i < count($teste); $i++) {

?>

<section>
	<div class="header-Name">
		<h1><?php echo $teste[$i]['nome']; ?></h1>
	</div>
</section>

<section>
	<div class="geral-info">
		<div class="ld-1">
			<div class="img-info">
				<img src="imgCar/carhb20.jpg" class="img-car-p"><br>
				<div class="coisas-extras">
					<div id="accordion">
				        <h3>Marca</h3>
				        <div>
				            <p><?php echo $teste[$i]['marca']; ?></p>
				        </div>
				        <h3>Versão</h3>
				        <div>
				            <p><?php echo $teste[$i]['versao']; ?></p>
				        </div>
				        <h3>Km</h3>
				        <div>
				            <p><?php echo $teste[$i]['km']; ?></p>
				        </div>
				        <h3>Ano</h3>
				        <div>
				            <p><?php echo $teste[$i]['ano']; ?></p>
				        </div>
				        <h3>Cor</h3>
				        <div>
				            <p><?php echo $teste[$i]['cor']; ?></p>
				        </div>
				    </div>
				</div>
			</div>
		</div>
		<div class="ld-2">
			<h2 class="ld-2-preco">R$ <?php echo $teste[$i]['preco']; ?>,00</h2>
			<div class="span-1">
				<span class="data"><center>ano</center></span>
				<p><?php echo $teste[$i]['ano']; ?></p>
			</div>
			<div class="span-2">
				<span class="km"><center>km</center></span>
				<p><?php echo $teste[$i]['km']; ?></p>
			</div>

			<div class="form-contact">
			<div class="form-geral">
				<div class="form-g">
					<p class="form-g-p">Não perca tempo, Faça seu orçamento!</p>
					<form id="form-cont" method="post">
						<span>Nome</span><br>
						<input type="text" name="nome" placeholder="Nome" required class="form-jc"><br>

						<span>Telefone</span><br>
						<input type="text" name="tel" placeholder="Telefone" required class="form-jc"><br>

						<span>Email</span><br>
						<input type="email" name="email" placeholder="Email" required class="form-jc"><br><br>

						<input type="submit" value="Solicitar contato" id="btn-sand" class="form-jc">
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

<?php } ?>

<section>
	<div class="final">
		<div class="logo-wolk">
			<img src="../img/Logo_Volkswagen.png">
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