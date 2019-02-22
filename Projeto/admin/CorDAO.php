<?php
	
	include_once("Cor.php");
	include_once("Conexao.php");

	class CorDAO {

		public function InsereCor (Cor $cor) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO cor(nome) VALUES (?);");
			
			$nome = $cor->getNome();
		
			$sql->bindParam(1, $nome);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Cadastrado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadstroCor';
				 	</script>
				 ";

			} else {
				
				echo "
					<script> alert('Erro ao cadastrar');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadstroCor';
				 	</script>
				 ";
				
			}
	
		}// fim insere

		public function ListarCor() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM cor");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarCor($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `cor` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaCor';
				 	</script>
				 ";
							
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaCor';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar
		
	}
	

?>