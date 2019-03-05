<?php

	include_once("Admin.php");
	include_once("AdminDAO.php");
	
	$admin = new Admin();
	$adminDAO = new AdminDAO();

	if (isset($_POST['login']) && isset($_POST['senha'])) {
	
		$teste = $adminDAO->ListarAdmin();
							
		for ($i=0; $i < count($teste); $i++) {
		
			if ($teste[$i]['login'] == $_POST['login'] && $teste[$i]['senha'] == $_POST['senha']) {
				
				session_start();
				$_SESSION["log"] = $_POST["login"];
				header("Location: http://localhost/PROJETO-WEB/Projeto/admin/index.php");

			} else {
				echo "
					<script> alert('Erro ao logar!') </script>
				";
			}
		
		}		
	
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