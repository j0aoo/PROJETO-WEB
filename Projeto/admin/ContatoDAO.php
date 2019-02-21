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
				
				echo "<script> alert('Contato solicitado! Verifique seu email em instantes') </script>";

			} else {
				
				echo "<script> alert('Erro ao solicitar contato!') </script>";
				
			}
	
		}// fim insere
		
	}

?>