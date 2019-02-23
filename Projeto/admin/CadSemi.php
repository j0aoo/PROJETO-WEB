<?php

	include_once("Seminovos.php");
	include_once("SeminovosDAO.php");
	
	$seminovos = new Seminovos();
	$seminovosDAO = new SeminovosDAO();

	include_once("Email.php");
	include_once("EmailDAO.php");
	
	$email = new Email();
	$emailDAO = new EmailDAO();

	if (isset($_POST['nome']) && isset($_FILES['arquivo'])) {
		
		$ext = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novoNome = microtime().$ext;
		$diretorio = "carSemi/";

		$seminovos->setNome($_POST['nome']);
		$seminovos->setAno($_POST['ano']);
		$seminovos->setPreco($_POST['preco']);
		$seminovos->setKm($_POST['km']);
		$seminovos->setVersao($_POST['versao']);
		$seminovos->setCor($_POST['cor']);
		$seminovos->setMarca($_POST['marca']);
		$seminovos->setNomeImage($novoNome);
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novoNome);

		$seminovosDAO->InsereCarro($seminovos);
	
		$teste = $emailDAO->ListarEmail();
							
		for ($i=0; $i < count($teste); $i++) {
			
			$assunto = "Novo carro em oferta!";
			$mensagem = "A concessionário Auto Sports agora está com um novo carro em oferta, confira!";	
		
			$to = "dk.joao12@gmail.com";
			$subject = "$assunto";
			$message = "$mensagem";
			$header = "MIME-Version: 1.0 \r\n";
			$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$header .= "From ".$teste[$i]['email'];

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
	<link rel="stylesheet" type="text/css" href="css/consultaAdmin.css">
</head>
<body>

<div class="txt">
	<h1>Cadastro - Seminovos</h1>
</div>

<div class="form-h">

	<div class="gd">

		<form id="form-contact" method="post" enctype="multipart/form-data">
		
			<span>Nome</span><br>
			<input type="text" name="nome" placeholder="Nome" required
			 maxlength="100" class="form-jc"><br>

			<span>Ano</span><br>
			<input type="text" name="ano" placeholder="Ano" required
			 maxlength="100" class="form-jc"><br>

			<span>Kilometragem</span><br>
			<input type="text" name="km" placeholder="km" required
			 maxlength="100" class="form-jc"><br>

			<span>Cor</span><br>
			<select name="cor" id="cor" class="form-jc" required>
				<option> - </option>
				<?php

					$teste = $seminovosDAO->ListarCor();
							
					for ($i=0; $i < count($teste); $i++) {
					
						echo '
							<option value='.$teste[$i]['nome'].'>'.$teste[$i]['nome'].'</option>
						';
					
					}

				?>
			</select><br>

			<span>Marca</span><br>
			<select name="marca" id="marca" class="form-jc" required>
				<option> - </option>
				<?php

					$teste = $seminovosDAO->ListarMarcas();
							
					for ($i=0; $i < count($teste); $i++) {
					
						echo '
							<option value='.$teste[$i]['nome'].'>'.$teste[$i]['nome'].'</option>
						';
					
					}

				?>
			</select><br>

			<span>Preco</span><br>
			<input type="text" name="preco" placeholder="Preço" required
			 maxlength="100" class="form-jc"><br>

			<span>Versão</span><br>
			<input type="text" name="versao" placeholder="Versão" required
			 maxlength="100" class="form-jc"><br>

			<span>Foto</span><br>
			<input type="file" name="arquivo" placeholder="Foto" required
			class="form-jc"><br>

			<input type="submit" value="Cadastrar" id="btn-sand" class="form-jc">

		</form>	
	</div>

</div>

</body>
</html>