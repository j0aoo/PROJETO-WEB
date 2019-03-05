<?php

	include_once("../admin/Seminovos.php");
	include_once("../admin/SeminovosDAO.php");
	
	$seminovos = new Seminovos();
	$seminovosDAO = new SeminovosDAO();

	if (isset($_POST['marca']) && isset($_POST['preco'])) {
		
		$marca = $_POST['marca'];
		$preco = $_POST['preco'];

		$teste = $seminovosDAO->ListarFilter($marca, $preco);

	} else {
	
		$teste = $seminovosDAO->ListarCarros();
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/styleSeminovos.css">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<!-- apenas teste-->
	<link href="https://fonts.googleapis.com/css?family=Lobster|Playfair+Display" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/elegant-font/html-css/style.css">
</head>
<body>

<?php
	include('menu.php');
?>

<section>
	<div class="header">
	
	</div>
</section>

<section>
	<div class="header-semi">
		<h1>Veliculos Seminovos</h1>
	</div>
</section>

<section>
	<div class="geral-filter">
		<div class="filter">
			<form method="post" class="form-teste">

				<div class="form-grup">
					<span>Marca</span><br>
					<select name="marca" class="form-sec">
						<option> - </option>
						<?php

							$testeMarcas = $seminovosDAO->ListarMarcas();
									
							for ($i=0; $i < count($testeMarcas); $i++) {
							
								echo '
									<option value='.$testeMarcas[$i]['nome'].'>'.$testeMarcas[$i]['nome'].'</option>
								';
							
							}

						?>
					</select>
				</div>

				<div class="form-grup">
					<span>Preço</span><br>
					<select name="preco" class="form-sec">
						<option> - </option>
						<option value="1"> 05.000 - 20.000 </option>
						<option value="2"> 20.000 - 40.000 </option>
						<option value="3"> 60.000 - 100.000 </option>
						<option value="4"> + 100.000 </option>
					</select>
				</div>

				<div class="form-grup">
					<br>
					<input type="submit" value="FILTRAR" class="btn-sec">
				</div>

			</form>
		</div>
	</div>
</section>

<section>
	<div class="geral-carros">
		<div class="txt-header">
			<h3>Conheça todos os carros seminovos multimarcas que possuímos em nossa loja!</h3>
		</div>
		<div class="item-cars-semi">
			<div class="cars-semi">
				
				<?php
								
					for ($i=0; $i < count($teste); $i++) {
					
						echo '

							<div class="cars">
								<a href="carroN.php?id='.$teste[$i]['id'].'">
									<img src="../admin/carSemi/'.$teste[$i]['nomeImage'].'">
									<h3>'.$teste[$i]['nome'].'</h3>
									<div class="span-1">
										<span class="data"><center>ano</center></span>
										<p>'.$teste[$i]['ano'].'</p>
									</div>
									<div class="span-2">
										<span class="km"><center>km</center></span>
										<p>'.$teste[$i]['km'].'</p>
									</div>
									<p class="pre">Por R$ '.$teste[$i]['preco'].',00</p>
								</a>
							</div>

						';
					
					}

				?>
				
			</div>
				
		</div>
	</div>
</section>

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