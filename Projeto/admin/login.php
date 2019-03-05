<?php
	
	session_start();
	
	include_once("Admin.php");
	include_once("AdminDAO.php");
	
	$admin = new Admin();
	$adminDAO = new AdminDAO();

	if (isset($_POST['login'])) {
			
		$_SESSION["log"] = $_POST['login'];

		$adminDAO->Logar($_POST['login'], $_POST['senha']);

	} else {

		echo "
			<script> Erro ao logar! </script>
		";

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/styleLog.css">
</head>
<body>

<div class="content">
	<div class="geral-content">
		<form method="post">
			<div class="form-gp">
				<span>Login</span><br>
				<input type="text" name="login" placeholder="Login" required class="form-jc"><br>	
			</div>
					
			<div class="form-gp">
				<span>Senha</span><br>
				<input type="password" name="senha" placeholder="Senha" required class="form-jc"><br><br>
			</div>	

			<input type="submit" value="enviar" class="form-jc">
		</div>
		</form>
</div>

</body>
</html>