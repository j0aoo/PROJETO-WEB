<?php

	include_once("Novos.php");
	include_once("NovosDAO.php");
	
	$novos = new Novos();
	$novosDAO = new NovosDAO();

	if (isset($_POST['nome']) && isset($_FILES['arquivo'])) {
		
		$ext = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novoNome = microtime().$ext;
		$diretorio = "carNovos/";

		$novos->setNome($_POST['nome']);
		$novos->setAno($_POST['ano']);
		$novos->setPreco($_POST['preco']);
		$novos->setVersao($_POST['versao']);
		$novos->setCor($_POST['cor']);
		$novos->setMarca($_POST['marca']);
		$novos->setNomeImage($novoNome);
		
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novoNome);

		$novosDAO->InsereCarro($novos);
	
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