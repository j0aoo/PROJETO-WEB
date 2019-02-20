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

				$to = "dk.joao12@gmail.com";
				$subject = "$assunto";
				$message = "$mensagem";
				$header = "MIME-Version: 1.0 \r\n";
				$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
				$header .= "From $emailForm";

				mail($to, $subject, $message, $header);
			
			} else {
				
				echo "<script> alert('Erro ao cadastrar!') </script>";
				
			}
	
		}// fim insere
		
	}
	

?>