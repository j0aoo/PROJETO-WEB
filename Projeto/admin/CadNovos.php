<?php

	include_once("Novos.php");
	include_once("NovosDAO.php");
	
	$novos = new Novos();
	$novosDAO = new NovosDAO();

	include_once("Email.php");
	include_once("EmailDAO.php");
	
	$email = new Email();
	$emailDAO = new EmailDAO();

	if (isset($_POST['nome']) && isset($_FILES['arquivo'])) {
		
		$ext = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novoNome = microtime().$ext;
		$diretorio = "carNovos/";

		$ext2 = strtolower(substr($_FILES['arquivo2']['name'], -4));
		$novoNome2 =  1+microtime().$ext2;
		$diretorio2 = "carNovos/";

		$ext3 = strtolower(substr($_FILES['arquivo3']['name'], -4));
		$novoNome3 = 2+microtime().$ext3;
		$diretorio3 = "carNovos/";

		$ext4 = strtolower(substr($_FILES['arquivo4']['name'], -4));
		$novoNome4 = 3+microtime().$ext4;
		$diretorio4 = "carNovos/";

		$novos->setNome($_POST['nome']);
		$novos->setAno($_POST['ano']);
		$novos->setPreco($_POST['preco']);
		$novos->setVersao($_POST['versao']);
		$novos->setCor($_POST['cor']);
		$novos->setMarca($_POST['marca']);
		$novos->setNomeImage($novoNome);
		$novos->setNomeImage2($novoNome2);
		$novos->setNomeImage3($novoNome3);
		$novos->setNomeImage4($novoNome4);
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novoNome);
		move_uploaded_file($_FILES['arquivo2']['tmp_name'], $diretorio2.$novoNome2);
		move_uploaded_file($_FILES['arquivo3']['tmp_name'], $diretorio3.$novoNome3);
		move_uploaded_file($_FILES['arquivo4']['tmp_name'], $diretorio4.$novoNome4);

		$novosDAO->InsereCarro($novos);
	
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
	<h1>Cadastro - Novos</h1>
</div>

<div class="form-h">

	<div class="gd">

		<form id="form-contact" method="post" enctype="multipart/form-data">
		
			<span>Nome</span><br>
			<input type="text" name="nome" placeholder="Nome" required
			 maxlength="100" class="form-jc"><br>

			<span>Preco</span><br>
			<input type="text" name="preco" placeholder="Preco" required
			 maxlength="100" class="form-jc"><br>

			<span>Ano</span><br>
			<input type="text" name="ano" placeholder="Ano" required
			 maxlength="100" class="form-jc"><br>

			<span>Cor</span><br>
			<select name="cor" class="form-jc">
				<option> - </option>
				<?php

					$teste = $novosDAO->ListarCor();
							
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

					$teste = $novosDAO->ListarMarcas();
							
					for ($i=0; $i < count($teste); $i++) {
					
						echo '
							<option value='.$teste[$i]['nome'].'>'.$teste[$i]['nome'].'</option>
						';
					
					}

				?>
			</select><br>

			<span>Versão</span><br>
			<input type="text" name="versao" placeholder="Versão" required
			 maxlength="100" class="form-jc"><br>

			<span>Foto</span><br>
			<input type="file" name="arquivo" placeholder="Foto" required
			class="form-jc"><br>

			<span>Foto - galeria</span><br>
			<input type="file" name="arquivo2" placeholder="Foto" required
			class="form-jc"><br>

			<span>Foto - galeria</span><br>
			<input type="file" name="arquivo3" placeholder="Foto" required
			class="form-jc"><br>

			<span>Foto - galeria</span><br>
			<input type="file" name="arquivo4" placeholder="Foto" required
			class="form-jc"><br>

			<input type="submit" value="Cadastrar" id="btn-sand" class="form-jc">

		</form>	
	</div>

</div>

</body>
</html>