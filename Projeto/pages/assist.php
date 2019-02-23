<?php
	
	include_once("../admin/Servico.php");
	include_once("../admin/ServicoDAO.php");

	$servicos = new Servico();
	$servicosDAO = new ServicoDAO();	

	if (isset($_POST['nome'])) {

		$servicos->setNome($_POST['nome']);
		$servicos->setTelefone($_POST['telefone']);
		$servicos->setEmail($_POST['email']);
		$servicos->setServ($_POST['serv']);

		if ($servicosDAO->InsereServico($servicos)) {
			
			$email = $_POST['email'];
			$assunto = "Auto sports! pedido solicitado";
			$mensagem = "Olá! ".$_POST['nome'].", Seu pedido realizado com sucesso!<br> Em que podemos ajuda-lo?";	
		
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

	<link rel="stylesheet" type="text/css" href="css/styleAss.css">

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
	<div class="header-pr">
		<h1>Assistência Técnica</h1>
	</div>
</section>

<section>
	<div class="geral-pecas">
		<div class="met-txt-form">
			<div class="grd-txt">
				<p>A demanda por serviços de ponta exige constante atualização, modernas instalações e profissionais capacitados para oferecer serviços de alto padrão.<br><br>

				E para atender às necessidades de clientes cada vez mais exigentes, o nosso setor de oficina promove o constante aprimoramento de sua equipe, onde seus consultores técnicos são treinados pela Volkswagen para desenvolver revisões, inspeções, serviços de pintura e funilaria com a qualidade da marca.<br><br>

				E para sua comodidade você pode ainda agendar sua visita à nossa oficina. Será um prazer recebê-lo.<br><br>

				Tenha a garantia de compromisso e qualidade na assistência técnica, que dispõe de oficinas credenciadas atendendo às exigências de manutenção e reparos do seu Volkswagen.<br><br>

				Para fazer o agendamento de revisão programada, manutenção ou serviços em seu veículo, utilize o formulário para enviar seus dados e aguarde que entraremos em contato informando a disponibilidade de data e horário em uma de nossas oficinas.</p><br><br>
			</div>
			<div class="grd-form">
				<div class="gd">
					<h3>Agendamento de Serviços</h3>
					<form id="form-pecas" method="post">
						
						<span>Nome</span><br>
						<input type="Text" name="nome" class="form-jc" placeholder="Nome" required><br>

						<span>Telefone</span><br>
						<input type="Text" name="telefone" class="form-jc" placeholder="Telefone" id="tele" required><br>

						<span>Email</span><br>
						<input type="email" name="email" class="form-jc" placeholder="Email" required><br>

						<span>Serviço</span><br>
						<input type="text" name="serv" class="form-jc" placeholder="Serviço" required><br><br>

						<input type="submit" value="Agendar" class="form-jc" id="btn-sand">

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