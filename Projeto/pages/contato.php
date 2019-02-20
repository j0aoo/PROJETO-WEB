<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/styleContato.css">

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

</head>
<body>

<?php
	include('menu.php');
?>

<section>
	<div class="header-contato">
	
	</div>
</section>

<section>
	<div class="header-contact">
		<h1>Fale Conosco</h1>
	</div>
</section>

<section>
	<div class="main">
		<div class="geral-contact-form">
			
			<div class="funcionamento">
				<h2 class="txt-finc">Horario de Funcionamento</h2>
				<table class="table-h">
					<tr align="center">
						<th>Departamento</th>
						<th>Segunda a sexta</th>
						<th>Sabado</th>
					</tr>
					<tr align="center">
						<th>Veiculos Novos</th>
						<td>07:30 às 18:30</td>
						<td>08:00 às 13:00</td>
					</tr>
					<tr align="center">
						<th>Veiculos Seminovos</th>
						<td>08:00 às 18:00</td>
						<td>08:00 às 13:00</td>
					</tr>
					<tr align="center">
						<th>Assistência Técnica</th>
						<td>07:30 às 17:30</td>
						<td>08:00 às 12:00</td>
					</tr>
				</table>
			</div>

			<div class="form-h">

				<div class="gd">
					<h2 class="txt-finc">Fale com um consultor</h2>

					<form id="form-contact">
					
					<span>Nome</span><br>
					<input type="text" name="Nome" placeholder="Nome" required
					 maxlength="100" class="form-jc"><br>

					<span>Telefone</span><br>
					<input type="text" name="Telefone" placeholder="Telefone" required
					 maxlength="16" class="form-jc"><br>

					<span>Email</span><br>
					<input type="email" name="Email" placeholder="Email" required
					 maxlength="100" class="form-jc"><br>

					<span>Mensagem</span><br>
					<textarea class="form-jc" required name="Mensagem" placeholder="Mensagem" maxlength="100"></textarea><br><br>

					<input type="submit" value="Solicitar Contato" id="btn-sand" class="form-jc">

				</form>	
			</div>

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