<?php

	include_once("Contatopecas.php");
	include_once("ContatopecasDAO.php");
	
	$contato = new Contatopecas();
	$contatopecasDAO = new ContatopecasDAO();

	if (isset($_POST['nome'])) {
		
		$teste = $contatopecasDAO->ListaUnica($_POST['nome']);

	} else {

		$teste = $contatopecasDAO->ListarContatos();

	}

	if (isset($_POST['todos'])) {
		
		$teste = $contatopecasDAO->ListarContatos();

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
		<h1>Solicitação de contato para PEÇAS</h1>
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

						$teste = $contatopecasDAO->DeletarPecas($id);
						
						$teste = $contatopecasDAO->ListarContatos();
					
					}

					if ($_REQUEST['acao'] == "status") {
						
						$contatopecasDAO->AtualizaStatus($id);
						$teste = $contatopecasDAO->ListarContatos();

					}

				}

							
				for ($i=0; $i < count($teste); $i++) {

					if ($teste[$i]['stat'] == 'Nlida') {
						
						$class = "table-hover-Nlida	";
						$txt = '<a href="?page=PedidoPecas&acao=status&id='.$teste[$i]["id"].'" class="a-trash"> Marcar como lida</a>';

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
							<td><a href="?page=PedidoPecas&acao=del&id='.$teste[$i]["id"].'" class="a-trash"><i class="fa fa-trash" aria-hidden="true"></i> Deletar</a></td>
						</tr>

					';
				
				}

			?>	

		</table>
	
	</div>
</div>


</body>
</html>