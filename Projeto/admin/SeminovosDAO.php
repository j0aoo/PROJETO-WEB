<?php
	
	include_once("Seminovos.php");
	include_once("Conexao.php");

	class SeminovosDAO {

		public function InsereCarro (Seminovos $seminovos) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO semi(nome,ano,preco,km,versao,cor,marca,nomeImage,nomeImage2,nomeImage3,nomeImage4) VALUES (?,?,?,?,?,?,?,?,?,?,?);");
			
			$nome = $seminovos->getNome();
			$ano = $seminovos->getAno();
			$preco = $seminovos->getPreco();
			$km = $seminovos->getKm();
			$versao = $seminovos->getVersao();
			$cor = $seminovos->getCor();
			$marca = $seminovos->getMarca();
			$foto = $seminovos->getNomeImage();
			$foto2 = $seminovos->getNomeImage2();
			$foto3 = $seminovos->getNomeImage3();
			$foto4 = $seminovos->getNomeImage4();

			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $ano);
			$sql->bindParam(3, $preco);
			$sql->bindParam(4, $km);
			$sql->bindParam(5, $versao);
			$sql->bindParam(6, $cor);
			$sql->bindParam(7, $marca);
			$sql->bindParam(8, $foto);
			$sql->bindParam(9, $foto2);
			$sql->bindParam(10, $foto3);
			$sql->bindParam(11, $foto4);
			
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

		public function ListarFilter($marca, $preco) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$precoTeste = "";

			if ($preco == 1) {
				$precoTeste = "preco BETWEEN 5000 AND 20000";
			}

			$sql = $stmt->prepare("SELECT * FROM `semi` WHERE `marca` = ? AND ".$precoTeste."");
			$sql->bindParam(1, $marca);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

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