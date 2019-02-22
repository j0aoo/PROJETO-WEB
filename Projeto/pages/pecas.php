<?php
	
	include_once("../admin/Contatopecas.php");
	include_once("../admin/ContatopecasDAO.php");
	
	$contatopecas = new Contatopecas();
	$contatopecasDAO = new ContatopecasDAO();	 

	if (isset($_POST['nome'])) {

		$contatopecas->setNome($_POST['nome']);
		$contatopecas->setTelefone($_POST['telefone']);
		$contatopecas->setEmail($_POST['email']);

		if ($contatopecasDAO->InsereContatoPecas($contatopecas)) {
			
			$email = $_POST['email'];
			$assunto = "Auto sports! Contato para peças solicitado";
			$mensagem = "Olá! ".$_POST['nome'].", Seu pedido de contato foi realizado com sucesso!<br> Em que podemos ajuda-lo?";	
		
			$to = "dk.joao12@gmail.com";
			$subject = "$assunto";
			$message = "$mensagem";
			$header = "MIME-Version: 1.0 \r\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$header .= "From $email";

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

	<link rel="stylesheet" type="text/css" href="css/stylePecas.css">

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

	<script type="text/javascript" src="js/jquery-3.0.0.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>

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
	<div class="header-pecas">
		<h1>Peças e Acessórios</h1>
	</div>
</section>


<section>
	<div class="geral-pecas">
		<div class="met-txt-form">
			<div class="grd-txt">
				<p>As peças e acessórios originais Volkswagen têm garantia, segurança e preços competitivos. Além disso são produzidas de acordo com os mais avançados controles de qualidade e rigor tecnológico.<br><br>

				Preencha o formulário, descrevendo corretamente a peça ou acessório pretendido, mais os dados do veículo. Em seguida um dos nossos consultores entrará em contato sobre a disponibilidade e o preço dos itens requisitados.</p>
			</div>
			<div class="grd-form">
				<div class="gd">
					<h3>Fale com um consultor</h3>
					<form id="form-pecas" method="post">
						
						<span>Nome</span><br>
						<input type="Text" name="nome" class="form-jc" placeholder="Nome" required><br>

						<span>Telefone</span><br>
						<input type="Text" name="telefone" class="form-jc" placeholder="Telefone" id="tele" required><br>

						<span>Email</span><br>
						<input type="email" name="email" class="form-jc" placeholder="Email" required><br><br>

						<input type="submit" value="Enviar" class="form-jc" id="btn-sand">

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

<script type="text/javascript">

    $(document).ready(function () { 
    
        var $campoTelefone = $("#tele");
    
        $campoTelefone.mask('(99)9-9999-9999', {reverse: true});
    
    });

        
</script>
</body>
</html>