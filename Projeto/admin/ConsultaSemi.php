<?php

	include_once("Seminovos.php");
	include_once("SeminovosDAO.php");
	
	$seminovos = new Seminovos();
	$seminovosDAO = new SeminovosDAO();

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
		<h1>Carros SEMINOVOS</h1>
	</div>

	<div class="dt-table">

		<table class="table-h">

			<tr align="center">
				<th>ID</th>
				<th>Nome</th>
				<th>Ano</th>
				<th>Versão</th>
				<th>Marca</th>
			</tr>
			
			<?php

				if (isset($_GET['acao'])) {
					
					if ($_GET['acao'] == "del") {
						
						$id = $_GET['id']; 
						$seminovosDAO->DeletarCarros($id);
						echo "<script> location.herf='http://localhost/web/Projeto/admin/?page=ConsultaSemi' </script>";

					}

				}

				$teste = $seminovosDAO->ListarCarros();
							
				for ($i=0; $i < count($teste); $i++) {
				
					echo '

						<tr align="center">
							<td>'.$teste[$i]["id"].'</td>
							<td>'.$teste[$i]["nome"].'</td>
							<td>'.$teste[$i]["ano"].'</td>
							<td>'.$teste[$i]["versao"].'</td>
							<td>'.$teste[$i]["marca"].'</td>
							<td><a href="?page=consultaSemi&acao=del&id='.$teste[$i]["id"].'" class="a-trash"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
						</tr>

					';
				
				}

			?>	

		</table>
	
	</div>
</div>


</body>
</html>