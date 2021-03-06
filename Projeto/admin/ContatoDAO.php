<?php

	include_once("Contato.php");
	include_once("Conexao.php");

	class ContatoDAO {

		public function InsereContato (Contato $contato) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO contato(nome,telefone,email,mensagem) VALUES (?,?,?,?);");
			
			$nome = $contato->getNome();
			$telefone = $contato->getTelefone();
			$email = $contato->getEmail();
			$mensagem = $contato->getMensagem();
		
			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $telefone);
			$sql->bindParam(3, $email);
			$sql->bindParam(4, $mensagem);
			
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

		public function ListarContato() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `contato`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($nome) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `contato` WHERE `nome` = ?");
			$sql->bindParam(1, $nome);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarContato($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `contato` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ControleContato';
				 	</script>
				 ";
			
			} else {
				
				echo "<script> alert('Erro ao Deletar!') </script>";
				
			}
			
		}// fim Deletar

		public function AtualizaStatus($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("UPDATE `contato` SET `stat` = 'lida' WHERE `id` = ?");
		
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				
				echo "
					<script>
						alert('Contato marcado como visto!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ControleContato';
				 	</script>
				";
			
			} else {
				
				echo "<script> alert('Erro ao alterar status!') </script>";
				
			}
			
		}
		
	}

?>