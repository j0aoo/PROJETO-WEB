<?php

	include_once("Cor.php");
	include_once("CorDAO.php");
	
	$cor = new Cor();
	$corDAO = new CorDAO();

	if (isset($_POST['nome'])) {

		$cor->setNome($_POST['nome']);
		
		$corDAO->InsereCor($cor);
	
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
	<h1>Cadastro de cor (Para carros)</h1>
</div>

<div class="form-h">

	<div class="gd">

		<form id="form-contact" method="post">
		
			<span>Nome</span><br>
			<input type="text" name="nome" placeholder="Login" required
			 maxlength="100" class="form-jc"><br><br>

			<input type="submit" value="Cadastrar" id="btn-sand" class="form-jc">

		</form>	
	</div>

</div>

</body>
</html>