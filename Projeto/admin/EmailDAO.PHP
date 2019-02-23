<?php
	
	include_once("Email.php");
	include_once("Conexao.php");

	class EmailDAO {

		public function InsereEmail (Email $email) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO cademailnovidades(email) VALUES (?);");
			
			$email = $email->getEmail();
		
			$sql->bindParam(1, $email);
			
			if ($sql->execute()) {
				
				echo "<script> alert('Cadastrado com sucesso!') </script>";

			} else {
				
				echo "<script> alert('Erro ao cadastrar!') </script>";
				
			}
	
		}// fim insere

		public function ListarEmail() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM cademailnovidades");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar
		
		public function DeletarEmail($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `cademailnovidades` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=consultaEmail';
				 	</script>
				 ";
							
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=consultaEmail';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar

	}
	

?>