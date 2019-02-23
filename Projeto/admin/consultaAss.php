<?php

	include_once("Servico.php");
	include_once("ServicoDAO.php");
	
	$servico = new Servico();
	$servicoDAO = new ServicoDAO();

	if (isset($_POST['nome'])) {
		
		$teste = $servicoDAO->ListaUnica($_POST['nome']);

	} else {

		$teste = $servicoDAO->ListarServico();

	}

	if (isset($_POST['todos'])) {
		
		$teste = $servicoDAO->ListarServico();

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

<div class="geral-consulta">

	<div class="txt">
		<h1>Solicitação ASSISTENCIA TECNICA</h1>
	</div>

	<div class="form-busca">
		<form method="post">
			<input type="text" name="nome" placeholder="Nome" required maxlength="'" th="100" class="form-b">
			<input type="submit" value="Buscar" class="form-s">
		</form>
		<form method="post">
			<input type="submit" name="todos" value="Mostrar Todos" class="form-sa">
		</form>
	</div>

	<div class="dt-table">

		<table class="table-h">

			<tr align="center">
				<th>ID</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Status</th>
			</tr>
			
			<?php

				if (isset($_GET['acao'])) {
					
					$id = $_GET['id'];

					if ($_GET['acao'] == "del") {

						$teste = $servicoDAO->DeletarServico($id);
						
						$teste = $servicoDAO->ListarServico();
					
					}

					if ($_REQUEST['acao'] == "status") {
						
						$servicoDAO->AtualizaStatus($id);
						$teste = $servicoDAO->ListarServico();

					}

				}

							
				for ($i=0; $i < count($teste); $i++) {

					if ($teste[$i]['stat'] == 'Nlida') {
						
						$class = "table-hover-Nlida	";
						$txt = '<a href="?page=consultaAss&acao=status&id='.$teste[$i]["id"].'" class="a-trash"> Marcar como lida</a>';

					}

					if ($teste[$i]['stat'] == 'lida') {
						
						$class = "table-hover-lida	";
						$txt = 'Visto';

					}

					echo '

						<tr align="center" class='.$class.'>
							<td>'.$teste[$i]["id"].'</td>
							<td>'.$teste[$i]["nome"].'</td>
							<td>'.$teste[$i]["telefone"].'</td>
							<td>'.$teste[$i]["email"].'</td>
							<td>'.$txt.'</td>
							<td><a href="?page=consultaAss&acao=del&id='.$teste[$i]["id"].'" class="a-trash"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
						</tr>

					';
				
				}

			?>	

		</table>
	
	</div>
</div>


</body>
</html>