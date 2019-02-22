<?php
	
	include_once("Contatoconsorcio.php");
	include_once("Conexao.php");

	class ContatoconsorcioDAO {

		public function InsereContato (Contatoconsorcio $contato) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO contatoConsorcio(nome,telefone,email) VALUES (?,?,?);");
			
			$nome = $contato->getNome();
			$telefone = $contato->getTelefone();
			$email = $contato->getEmail();
		
			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $telefone);
			$sql->bindParam(3, $email);
			
			if ($sql->execute()) {
				
				echo "<script> alert('Contato solicitado! verifique seu email em instantes') </script>";

			} else {
				
				echo "<script> alert('Erro ao solicitar contato!') </script>";
				
			}
	
		}// fim insere

		public function ListarConsorcio() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `contatoconsorcio`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($nome) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `contatoconsorcio` WHERE `nome` = ?");
			$sql->bindParam(1, $nome);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarConsorcio($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `contatoconsorcio` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "<script> alert('Deletado com sucesso!') </script>";
				header("http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoConsorcio");
			
			} else {
				
				echo "<script> alert('Erro ao Deletar!') </script>";
				
			}
			
		}// fim Deletar		
	
		public function AtualizaStatus($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("UPDATE `contatoconsorcio` SET `stat` = 'lida' WHERE `id` = ?");
		
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				
				echo "
					<script>
						alert('Contato marcado como visto!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoConsorcio';
				 	</script>
				";
			
			} else {
				
				echo "
					<script>
						alert('Erro ao alterar status!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=PedidoConsorcio';
				 	</script>
				";

				
			}
			
		}

	}
	

?>