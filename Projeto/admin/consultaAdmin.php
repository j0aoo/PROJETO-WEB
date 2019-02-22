<?php

	include_once("Admin.php");
	include_once("AdminDAO.php");
	
	$admin = new Admin();
	$adminDAO = new AdminDAO();

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

<div class="geral-consulta">

	<div class="txt">
		<h1>Controle - Admin</h1>
	</div>

	<div class="dt-table">

		<table class="table-h">

			<tr align="center">
				<th>ID</th>
				<th>Login</th>
				<th>Senha</th>
			</tr>
			
			<?php

				if (isset($_GET['acao'])) {
					
					if ($_GET['acao'] == "del") {
						
						$id = $_GET['id']; 
						$adminDAO->DeletarAdmin($id);
						echo "<script> location.herf='http://localhost/web/Projeto/admin/' </script>";

					}

				}

				$teste = $adminDAO->ListarAdmin();
							
				for ($i=0; $i < count($teste); $i++) {
				
					echo '

						<tr align="center">
							<td>'.$teste[$i]["id"].'</td>
							<td>'.$teste[$i]["login"].'</td>
							<td>*****</td>
							<td><a href="?page=consultaAdmin&acao=del&id='.$teste[$i]["id"].'" class="a-trash"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
						</tr>

					';
				
				}

			?>	

		</table>
	
	</div>
</div>


</body>
</html>