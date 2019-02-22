<?php
	
	include_once("Admin.php");
	include_once("Conexao.php");

	class AdminDAO {

		public function Login ($login) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM admin WHERE login = ?");
			$sql->bindParam(1, $login);

			if ($sql->execute()) {
			
				echo "<script>alert('deu crt')</script>";
			
			} else {

				echo "<script>alert('deu errado')</script>";

			}
		
		}// fim login

		public function InsereAdmin (Admin $admin) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO admin(login,senha) VALUES (?,?);");
			
			$login = $admin->getLogin();
			$senha = $admin->getSenha();
		
			$sql->bindParam(1, $login);
			$sql->bindParam(2, $senha);

			if ($sql->execute()) {
				
				echo "<script> alert('Cadastrado com sucesso!') </script>";

			} else {
				
				echo "<script> alert('Erro ao cadastrar!') </script>";
				
			}
	
		}// fim insere

		public function ListarAdmin() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM admin");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarAdmin($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `admin` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "<script> alert('Deletado com sucesso!') </script>";
							
			} else {
				
				echo "<script> alert('Erro ao Deletar!') </script>";
				
			}
			
		}// fim Deletar
		
	}
	

?>