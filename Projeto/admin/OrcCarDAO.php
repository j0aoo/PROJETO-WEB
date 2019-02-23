<?php

	include_once("OrcCar.php");
	include_once("Conexao.php");

	class OrcCarDAO {

		public function InsereOrc (OrcCar $orc) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO orccar(nome,telefone,email) VALUES (?,?,?);");
			
			$nome = $orc->getNome();
			$telefone = $orc->getTelefone();
			$email = $orc->getEmail();
		
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

		public function ListarOrc() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `orccar`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($nome) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `orccar` WHERE `nome` = ?");
			$sql->bindParam(1, $nome);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarOrc($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `orccar` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoCarro';
				 	</script>
				 ";
			
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoCarro';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar

		public function AtualizaStatus($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("UPDATE `orccar` SET `stat` = 'lida' WHERE `id` = ?");
		
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				
				echo "
					<script>
						alert('Contato marcado como visto!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoCarro';
				 	</script>
				";
			
			} else {
				
				echo "
					<script>
						alert('Erro ao atualizar status!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoCarro';
				 	</script>
				";
				
			}
			
		}
		
	}

?>