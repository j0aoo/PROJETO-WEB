<?php
	
	include_once("Marca.php");
	include_once("Conexao.php");

	class MarcaDAO {

		public function InsereMarca (Marca $marca) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO marcas(nome) VALUES (?);");
			
			$nome = $marca->getNome();
		
			$sql->bindParam(1, $nome);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Cadastrado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadMarca';
				 	</script>
				 ";

			} else {
				
				echo "
					<script> alert('Erro ao cadastrar');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadMarca';
				 	</script>
				 ";
				
			}
	
		}// fim insere

		public function ListarMarca() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM marcas");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarMarca($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `marcas` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaMarca';
				 	</script>
				 ";
							
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaMarca';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar
		
	}
	

?>