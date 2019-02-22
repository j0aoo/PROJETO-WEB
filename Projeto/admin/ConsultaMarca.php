<?php

	include_once("Marca.php");
	include_once("MarcaDAO.php");
	
	$marca = new Marca();
	$marcaDAO = new MarcaDAO();

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
				<th>Nome</th>
			</tr>
			
			<?php

				if (isset($_GET['acao'])) {
					
					if ($_GET['acao'] == "del") {
						
						$id = $_GET['id']; 
						$marcaDAO->DeletarMarca($id);

					}

				}

				$teste = $marcaDAO->ListarMarca();
							
				for ($i=0; $i < count($teste); $i++) {
				
					echo '

						<tr align="center">
							<td>'.$teste[$i]["id"].'</td>
							<td>'.$teste[$i]["nome"].'</td>
							<td><a href="?page=ConsultaMarca&acao=del&id='.$teste[$i]["id"].'" class="a-trash"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
						</tr>

					';
				
				}

			?>	

		</table>
	
	</div>
</div>


</body>
</html>