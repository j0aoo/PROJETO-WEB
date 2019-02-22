<?php

	include_once("Orcamento.php");
	include_once("Conexao.php");

	class OrcamentoDAO {

		public function InsereOrcamento (Orcamento $orcamento) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO orcamento(nome,telefone,email) VALUES (?,?,?);");
			
			$nome = $orcamento->getNome();
			$telefone = $orcamento->getTelefone();
			$email = $orcamento->getEmail();
		
			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $telefone);
			$sql->bindParam(3, $email);
			
			if ($sql->execute()) {
				
				echo "
					<script> alert('Contato solicitado! Verifique seu email em instantes');
				 	</script>
				 ";

			} else {
				
				echo "
					<script> alert('Erro ao solicitar contato');
				 	</script>
				 ";
				
			}
	
		}// fim insere

		public function ListarOrcamento() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `orcamento`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($nome) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `orcamento` WHERE `nome` = ?");
			$sql->bindParam(1, $nome);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarOrcamento($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `orcamento` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoOrcamento';
				 	</script>
				 ";
			
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoOrcamento';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar

		public function AtualizaStatus($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("UPDATE `orcamento` SET `stat` = 'lida' WHERE `id` = ?");
		
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				
				echo "
					<script>
						alert('Contato marcado como visto!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoOrcamento';
				 	</script>
				";
			
			} else {
				
				echo "
					<script>
						alert('Erro ao atualizar status!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoOrcamento';
				 	</script>
				";
				
			}
			
		}
		
	}

?>