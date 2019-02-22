<?php

	include_once("Admin.php");
	include_once("AdminDAO.php");
	
	$admin = new Admin();
	$adminDAO = new AdminDAO();

	if (isset($_POST['login'])) {

		$admin->setLogin($_POST['login']);
		$admin->setSenha($_POST['senha']);
		
		$adminDAO->InsereAdmin($admin);
	
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
	<h1>Cadastro - Admin</h1>
</div>

<div class="form-h">

	<div class="gd">

		<form id="form-contact" method="post">
		
			<span>Login</span><br>
			<input type="text" name="login" placeholder="Login" required
			 maxlength="100" class="form-jc"><br>

			<span>Senha</span><br>
			<input type="password" name="senha" placeholder="Senha" required
			 maxlength="16" class="form-jc"><br><br>

			<input type="submit" value="Cadastrar" id="btn-sand" class="form-jc">

		</form>	
	</div>

</div>

</body>
</html>