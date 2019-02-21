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
		
	}
?>