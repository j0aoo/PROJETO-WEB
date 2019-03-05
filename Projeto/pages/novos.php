<?php

	include_once("../admin/Novos.php");
	include_once("../admin/NovosDAO.php");
	
	$novos = new Novos();
	$novosDAO = new NovosDAO();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="css/styleNovos.css">

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
<style type="text/css">
	
	.product-item {
    position:relative;
    font-size:1.5rem;
    font-weight:700;
    background-color:transparent;
    border-color:transparent;
    transition:all .2s ease-in-out 
  }
  
  .product-item:hover{
    background-color:#fff;
    box-shadow:0 .5rem 1rem rgba(0,0,0,.15)
  }
  
  .product-item:hover .product-image:after,.product-item:hover .product-image:before{
    opacity:1;
    -webkit-transform:translate(0);
    transform:translate(0)
  }
  
  .product-image{
    position:relative;
    padding-top:.5rem;
    padding-bottom:.5rem;
    transition:all 2s
  }

  .product-image:after,.product-image:before{
    position:absolute;
    right:0;
    left:0;
    height:7px;
    content:"";
    opacity:0;
    transition:all .3s;
    -webkit-transform:translateY(30px);
    transform:translateY(30px)
  }

  .product-image:before{
    bottom:-6px;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUoAAAAHBAMAAACcthkwAAAAD1BMVEUAAAD/vwD/vwD/vwD/vwBYa2Z+AAAABHRSTlMAwEAw9JyPcwAAAC1JREFUOMtjcMEETgwQwIJFTgEiRWdto64cdeWoK8l2pSAmEIZKMWKRMxgQbQCWVcU78Wj7hwAAAABJRU5ErkJggg==");-webkit-animation:road .9s linear infinite;animation:road .9s linear infinite}.product-image:after{bottom:8px;background-color:#ffbf00}@-webkit-keyframes fill{0%{width:0;height:1px}50%{width:100%;height:1px}to{width:100%;height:100%;background:#0b8dcd}}@keyframes fill{0%{width:0;height:1px}50%{width:100%;height:1px}to{width:100%;height:100%;background:#0b8dcd}}@-webkit-keyframes road{0%{background-position:0}to{background-position:330px}}@keyframes road{0%{background-position:0}to{background-position:330px}
  }

  .stretched-link {
    color: #FDD700;
    text-decoration: none;
    padding: 20px 10px;
  }

  .card-body {
    display: flex;
    justify-content: center;
  }

  .geral-car-i {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }

</style>
<body>

<?php
	include('menu.php');
?>

<section>
	<div class="header">
	
	</div>
</section>

<section>
	<div class="header-contact">
		<h1>Catálogo de Carros Novos</h1>
	</div>
</section>

<section>
	<div class="carros-o">
		<div class="txt-bx-header">
			<h2>Novos em OFERTA</h2>
		</div>
		<div class="conjCar">
			
			<div class="geral-car-i">
		    
		    	<?php

					$teste = $novosDAO->ListarCarros();
								
					for ($i=0; $i < count($teste); $i++) {

						echo '

							<a href="carroNovo.php?id='.$teste[$i]['id'].'" class="item-car-l">
						      	<div class="card product-item">
						        	<div class="card-image-top product-image">
						          		<img class="img-fluid" src="../admin/carNovos/'.$teste[$i]['nomeImage'].'" alt="'.$teste[$i]['nome'].'" title="'.$teste[$i]['nome'].'">
						        	</div>
							        <div class="card-body">
							          	<a href="#" class="stretched-link">'.$teste[$i]['nome'].'</a>
							        </div>
						      	</div>
						    </a>

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