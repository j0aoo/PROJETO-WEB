<?php

	include_once("Marca.php");
	include_once("MarcaDAO.php");
	
	$marca = new Marca();
	$marcaDAO = new MarcaDAO();

	if (isset($_POST['nome'])) {

		$marca->setNome($_POST['nome']);
		
		$marcaDAO->InsereMarca($marca);
	
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
	<h1>Cadastro - Marca (Para carros - seminovos)</h1>
</div>

<div class="form-h">

	<div class="gd">

		<form id="form-contact" method="post">
		
			<span>Nome</span><br>
			<input type="text" name="nome" placeholder="Login" required
			 maxlength="100" class="form-jc"><br>

			<input type="submit" value="Cadastrar" id="btn-sand" class="form-jc">

		</form>	
	</div>

</div>

</body>
</html>