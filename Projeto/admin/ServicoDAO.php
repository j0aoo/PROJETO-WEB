<?php

	include_once("Servico.php");
	include_once("Conexao.php");

	class ServicoDAO {

		public function InsereServico (Servico $servico) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO servicos(nome,telefone,email,serv) VALUES (?,?,?,?);");
			
			$nome = $servico->getNome();
			$telefone = $servico->getTelefone();
			$email = $servico->getEmail();
			$serv = $servico->getServ();
		
			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $telefone);
			$sql->bindParam(3, $email);
			$sql->bindParam(4, $serv);
			
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

		public function ListarServico() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `servicos`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($nome) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `servicos` WHERE `nome` = ?");
			$sql->bindParam(1, $nome);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarServico($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `servicos` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=consultaAss';
				 	</script>
				 ";
			
			} else {
				
				echo "<script> alert('Erro ao Deletar!') </script>";
				
			}
			
		}// fim Deletar

		public function AtualizaStatus($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("UPDATE `servicos` SET `stat` = 'lida' WHERE `id` = ?");
		
			$sql->bindParam(1, $id);
			
			if ($sql->execute()) {
				
				echo "
					<script>
						alert('Contato marcado como visto!');
						location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=consultaAss';
				 	</script>
				";
			
			} else {
				
				echo "<script> alert('Erro ao alterar status!') </script>";
				
			}
			
		}
		
	}

?>