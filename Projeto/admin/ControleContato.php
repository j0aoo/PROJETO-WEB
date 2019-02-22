<?php

	include_once("Contato.php");
	include_once("ContatoDAO.php");
	
	$contato = new Contato();
	$contatoDAO = new ContatoDAO();

	if (isset($_POST['nome'])) {
		
		$teste = $contatoDAO->ListaUnica($_POST['nome']);

	} else {

		$teste = $contatoDAO->ListarContato();

	}

	if (isset($_POST['todos'])) {
		
		$teste = $contatoDAO->ListarContato();

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
		<h1>Solicitação de contato GERAL</h1>
	</div>

	<div class="form-busca">
		<form method="post">
			<input type="text" name="nome" placeholder="Nome" required maxlength="100" class="form-b">
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
				<th>Mensagem</th>
				<th>Status</th>
			</tr>
			
			<?php

				if (isset($_REQUEST['acao'])) {
					
					$id = $_REQUEST['id'];	

					if ($_REQUEST['acao'] == "del") {
						
						$contatoDAO->DeletarContato($id);
						$teste = $contatoDAO->ListarContato();

					}

					if ($_REQUEST['acao'] == "status") {
						
						$contatoDAO->AtualizaStatus($id);
						$teste = $contatoDAO->ListarContato();

					}

				}
							
				for ($i=0; $i < count($teste); $i++) {

					if ($teste[$i]['stat'] == 'Nlida') {
						
						$class = "table-hover-Nlida	";
						$txt = '<a href="?page=ControleContato&acao=status&id='.$teste[$i]["id"].'" class="a-trash"> Marcar como lida</a>';

					}

					if ($teste[$i]['stat'] == 'lida') {
						
						$class = "table-hover-lida	";
						$txt = 'Visto';

					}

					echo '

						<tr align="center" class="'.$class.'">
							<td>'.$teste[$i]["id"].'</td>
							<td>'.$teste[$i]["nome"].'</td>
							<td>'.$teste[$i]["telefone"].'</td>
							<td>'.$teste[$i]["email"].'</td>
							<td>'.$teste[$i]["mensagem"].'</td>
							<td>'.$txt.'</td>
							<td><a href="?page=ControleContato&acao=del&id='.$teste[$i]["id"].'" class="a-trash"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
						</tr>

					';
				
				}

			?>	

		</table>
	
	</div>
</div>


</body>
</html>