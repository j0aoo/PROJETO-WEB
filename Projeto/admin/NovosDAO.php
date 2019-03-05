<?php
	
	include_once("Novos.php");
	include_once("Conexao.php");

	class NovosDAO {

		public function InsereCarro (Novos $novos) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO novos(nome,preco,versao,ano,marca,cor,nomeImage,nomeImage2,nomeImage3,nomeImage4) VALUES (?,?,?,?,?,?,?,?,?,?);");
			
			$nome = $novos->getNome();
			$ano = $novos->getAno();
			$preco = $novos->getPreco();
			$versao = $novos->getVersao();
			$cor = $novos->getCor();
			$marca = $novos->getMarca();
			$foto = $novos->getNomeImage();
			$foto2 = $novos->getNomeImage2();
			$foto3 = $novos->getNomeImage3();
			$foto4 = $novos->getNomeImage4();

			$sql->bindParam(1, $nome);
			$sql->bindParam(4, $ano);
			$sql->bindParam(2, $preco);
			$sql->bindParam(3, $versao);
			$sql->bindParam(6, $cor);
			$sql->bindParam(5, $marca);
			$sql->bindParam(7, $foto);
			$sql->bindParam(8, $foto2);
			$sql->bindParam(9, $foto3);
			$sql->bindParam(10, $foto4);
			
			if ($sql->execute()) {
				
				echo "
					<script>
					 	alert('Cadastrado com sucesso!');
					 	location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=CadNovos';
				 	</script>
				";

			} else {
				
				echo "
					<script>
					 	alert('Erro ao cadastrar!');
					 	
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
			
			$sql = $stmt->prepare("SELECT * FROM `novos`");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListarCarrosl() {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `novos` LIMIT 3");
			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar

		public function ListaUnica($id) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `novos` WHERE id = ?");
			$sql->bindParam(1, $id);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar
		
		public function DeletarCarros($id) {
			
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("DELETE FROM `novos` WHERE `id` = ?;");
			$sql->bindParam(1, $id);

			if ($sql->execute()) {
				
				echo "
					<script> alert('Deletado com sucesso!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaNovos';
				 	</script>
				 ";
							
			} else {
				
				echo "
					<script> alert('Erro ao deletar!');
				 		location.href='http://localhost/PROJETO-WEB/Projeto/admin/?page=ConsultaNovos';
				 	</script>
				 ";
				
			}
			
		}// fim Deletar

	}
	

?>