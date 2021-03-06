<?php
	include_once("Contatopecas.php");
	include_once("Conexao.php");

	class ContatopecasDAO {

		public function InsereContatoPecas (Contatopecas $contato) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO pecas(nome,telefone,email) VALUES (?,?,?);");
			
			$nome = $contato->getNome();
			$telefone = $contato->getTelefone();
			$email = $contato->getEmail();
		
			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $telefone);
			$sql->bindParam(3, $email);
			
			if ($sql->execute()) {
				
				echo "<script> alert('Contato solicitado! Verifique seu email em instantes') </script>";

			} else {
				
				echo "<script> alert('Erro ao solicitar contato!') </script>";
				
			}
	
		}// fim insere
		
		public function ListarContatos() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `pecas`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($nome) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `pecas` WHERE `nome` = ?");
			$sql->bindParam(1, $nome);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarPecas($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `pecas` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {

				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoPecas';
				 	</script>
				 ";
			
			} else {
				
				echo "<script> alert('Erro ao Deletar!') </script>";
				
			}
			
		}// fim Deletar

		public function AtualizaStatus($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("UPDATE `pecas` SET `stat` = 'lida' WHERE `id` = ?");
		
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				
				echo "
					<script>
						alert('Contato marcado como visto!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoPecas';
				 	</script>
				";
			
			} else {
				
				echo "
					<script>
						alert('Erro ao alterar status!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoPecas';
				 	</script>
				";

				
			}
			
		}

	}
?>