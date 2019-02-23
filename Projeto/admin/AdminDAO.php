<?php
	
	include_once("Admin.php");
	include_once("Conexao.php");

	class AdminDAO {

		public function Logar($login, $senha) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM admin WHERE login = ? AND senha = ?");
			$sql->bindParam(1, $login);
			$sql->bindParam(2, $senha);

			if ($sql->execute()) {
			
				echo "
					<script> location.href='http://localhost/PROJETO-WEB/Projeto/admin/index.php' </script>
				";
			
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
				
				echo "
					<script> alert('Cadastrado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=cadastroAdmin';
				 	</script>
				 ";

			} else {
				
				echo "
					<script> alert('Erro ao cadastrar');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=cadastroAdmin';
				 	</script>
				 ";
				
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
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=consultaAdmin';
				 	</script>
				 ";
							
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=consultaAdmin';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar
		
	}
	

?>