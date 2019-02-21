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
		
	}
	

?>