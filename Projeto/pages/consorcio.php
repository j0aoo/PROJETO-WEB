<?php
	
	include_once("../admin/Contatoconsorcio.php");
	include_once("../admin/ContatoconsorcioDAO.php");
	
	$contato = new Contatoconsorcio();
	$contatoDAO = new ContatoconsorcioDAO();
	
	if (isset($_POST['nome'])) {

		$contato->setNome($_POST['nome']);
		$contato->setTelefone($_POST['tel']);
		$contato->setEmail($_POST['email']);
		
		$contatoDAO->InsereContato($contato);
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/styleConsorcio.css">
	<link rel="stylesheet" type="text/css" href="css/bootstraps.css">
	
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

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
	<div class="header-consorcio">
		<h1>Consórcio</h1>
	</div>
</section>

<section>
	<div class="pt1-con">
		<div class="pt-con-h1">
			<h1>As melhores ofertas de veículos novos e seminovos.</h1>
		</div>
		<div class="pt-inf">
			<div class="gera-info">
				<h3><i class="fa fa-money" aria-hidden="true"></i> Parcelas à partir de R$ 391,50</h3>
			</div>
			<div class="gera-info">
				<h3><i class="fa fa-calendar" aria-hidden="true"></i> Planos com até 80 meses para pagar.</h3>
			</div>
			<div class="gera-info">
				<h3><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Melhor taxa do mercado</h3>
			</div>
		</div>
		<div class="fala-link">
			<a href="#" data-toggle="modal" data-target="#exampleModal">Faça ja seu orçamento</a>
		</div>
	</div>
</section>

<section>
	<div class="geral-veja">
		<div class="veja-h2">
			<h2>Veja como é simples</h2>
		</div>
		<div class="pt-info-facil">
			<div class="item-facil">
				<img src="imgCar/iconGrup.jpg"><br>
				<h2>Formação do grupo</h2>
				<p align="center">No consórcio, você faz parte de um grupo de pessoas que se une com o mesmo objetivo: a aquisição de um carro.<br><br>

				Assim você realizará uma compra parcelada e programada, onde cada participante do grupo é identificado através de um número, chamado cota.</p>
			</div>
			<div class="item-facil">
				<img src="imgCar/iconLance.png">
				<h2>Assembleia / Lance</h2>
				<p align="center">Todo mês é realizada uma assembleia de contemplação, onde uma cota é contemplada através de sorteio.<br><br>

				Outra forma de você ser contemplado é através de um lance, ou seja, você pode, todo mês, oferecer um adiantamento de parcelas</p>
			</div>
			<div class="item-facil">
				<img src="imgCar/iconCar.png">
				<h2>Contemplação</h2>
				<p align="center">Existem diversas opções de prazos e formas de contemplação para adquirir um bem, por isso o consórcio oferece diferentes tipos de planos.<br><br>

				Os participantes contemplados deverão continuar pagando as parcelas conforme o plano adquirido.</p>
			</div>
		</div>
		<div class="fala-link">
			<a href="#" data-toggle="modal" data-target="#exampleModal">Fale com um consultor</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fale com um consultor!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="gd">
			<form id="form-contact" method="post">
				
				<span>Nome</span><br>
				<input type="text" name="nome" placeholder="Nome" required
				 maxlength="100" class="form-jc"><br>

				<span>Telefone</span><br>
				<input type="text" name="tel" id="tele" placeholder="Telefone" required
				 maxlength="16" class="form-jc"><br>

				<span>Email</span><br>
				<input type="email" name="email" placeholder="Email" required
				 maxlength="100" class="form-jc"><br>

			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <input type="submit" class="btn btn-primary" value="Solicitar contato">
        </form>	
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

    $(document).ready(function () { 
    
        var $campoTelefone = $("#tele");
    
        $campoTelefone.mask('(99)9-9999-9999', {reverse: true});
    
    });

        
</script>
</body>
</html>