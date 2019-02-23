<?php
	
	include_once("Seminovos.php");
	include_once("Conexao.php");

	class SeminovosDAO {

		public function InsereCarro (Seminovos $seminovos) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO semi(nome,ano,preco,km,versao,cor,marca,nomeImage) VALUES (?,?,?,?,?,?,?,?);");
			
			$nome = $seminovos->getNome();
			$ano = $seminovos->getAno();
			$preco = $seminovos->getPreco();
			$km = $seminovos->getKm();
			$versao = $seminovos->getVersao();
			$cor = $seminovos->getCor();
			$marca = $seminovos->getMarca();
			$foto = $seminovos->getNomeImage();

			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $ano);
			$sql->bindParam(3, $preco);
			$sql->bindParam(4, $km);
			$sql->bindParam(5, $versao);
			$sql->bindParam(6, $cor);
			$sql->bindParam(7, $marca);
			$sql->bindParam(8, $foto);
			
			if ($sql->execute()) {
				
				echo "
					<script>
					 	alert('Cadastrado com sucesso!');
					 	location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadSemi';
				 	</script>
				";

			} else {
				
				echo "
					<script>
					 	alert('Erro ao cadastrar!');
					 	location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadSemi';
				 	</script>
				";
				
			}
	
		}// fim insere

		public function ListarCor() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `cor`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListarMarcas() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `marcas`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListarCarros() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `semi`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($id) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `semi` WHERE id = ?");
			$sql->bindParam(1, $id);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function DeletarCarros($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `semi` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaSemi';
				 	</script>
				";
							
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaSemi';
				 	</script>
				";
				
			}
			
		}// fim Deletar
		
	}
	

?>