<?php
	
	session_start();

	if (!$_SESSION["log"]) {
		header("Location: login.php");
	}

	if (isset($_GET['sair'])) {
		session_destroy();
		echo "
			<script>
				location.href = 'http://localhost/PROJETO-WEB/Projeto/admin/index.php';
			</script>
		";
	}

	if ($_SESSION["log"]) {
		$name = $_SESSION["log"];
	}	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/style.css">

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

<div class="menu-cima">
	<div class="geral-cima">
		<h2>AdminLTE</h2>
	</div>
	<div class="ld-2">
		<ul>
			<li>
				<img src="https://siderg.com.br/uploads/default.png" class="img-ad">
				<ul class="nav-drop">
					<li>
						<a href="?sair=1"><h4>Sair</h4></a>
					</li>
				</ul>
			</li>
		</ul>
		<p><?php echo $name ?></p>
	</div>
</div>

<input type="checkbox" id="check">
<label id="icone" for="check"><img src="icone.png"></label>

<div class="barra">
	<nav class="nav-barra">
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Admin</h4>
						<ul class="link-menu">
							<li><a href="?page=consultaAdmin" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
							<li><a href="?page=cadastroAdmin" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Cadastrar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Emails cadastrados</h4>
						<ul class="link-menu">
							<li><a href="?page=consultaEmail" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Assistencia tecnica</h4>
						<ul class="link-menu">
							<li><a href="?page=consultaAss" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Cores (Para carros)</h4>
						<ul class="link-menu">
							<li><a href="?page=CadstroCor" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Cadastrar</a></li>
							<li><a href="?page=ConsultaCor" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Marca (Para carros)</h4>
						<ul class="link-menu">
							<li><a href="?page=CadMarca" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Cadastrar</a></li>
							<li><a href="?page=ConsultaMarca" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Carros Novos</h4>
						<ul class="link-menu">
							<li><a href="?page=CadNovos" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Cadastrar</a></li>
							<li><a href="?page=ConsultaNovos" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Carros Seminovos</h4>
						<ul class="link-menu">
							<li><a href="?page=CadSemi" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Cadastrar</a></li>
							<li><a href="?page=ConsultaSemi" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Contato geral</h4>
						<ul class="link-menu">
							<li><a href="?page=ControleContato" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Pedido de contato - ORÇAMENTO PARA CARRO</h4>
						<ul class="link-menu">
							<li><a href="?page=PedidoOrcamento" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Pedido de contato - CARRO NOVO</h4>
						<ul class="link-menu">
							<li><a href="?page=PedidoCarro" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Pedido de contato - PEÇAS</h4>
						<ul class="link-menu">
							<li><a href="?page=PedidoPecas" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p">Pedido de contato - CONSÓRCIO</h4>
						<ul class="link-menu">
							<li><a href="?page=PedidoConsorcio" class="item-link"><i class="fa fa-circle-o" aria-hidden="true"></i> Consultar</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p"></h4>
					</li>
				</ul>
			</div>
		</a>
		<a href="">
			<div class="link">
				<ul>
					<li><h4 class="li-p"></h4>
					</li>
				</ul>
			</div>
		</a>
	</nav>
</div>

<div class="cont">
	<?php
		
		if(isset($_GET['page'])){

			include($_GET['page'].".php");

		}
			
	?>
</div>

</body>
</html>	