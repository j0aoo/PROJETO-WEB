<?php
	
	include_once("Novos.php");
	include_once("Conexao.php");

	class NovosDAO {

		public function InsereCarro (Novos $novos) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("INSERT INTO novos(nome,preco,versao,ano,marca,cor,nomeImage) VALUES (?,?,?,?,?,?,?);");
			
			$nome = $novos->getNome();
			$ano = $novos->getAno();
			$preco = $novos->getPreco();
			$versao = $novos->getVersao();
			$cor = $novos->getCor();
			$marca = $novos->getMarca();
			$foto = $novos->getNomeImage();

			$sql->bindParam(1, $nome);
			$sql->bindParam(4, $ano);
			$sql->bindParam(2, $preco);
			$sql->bindParam(3, $versao);
			$sql->bindParam(6, $cor);
			$sql->bindParam(5, $marca);
			$sql->bindParam(7, $foto);
			
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

		public function ListaUnica($id) {
		
			$con = new Conexao();
			$stmt = $con->Conexao();
			
			$sql = $stmt->prepare("SELECT * FROM `novos` WHERE id = ?");
			$sql->bindParam(1, $id);

			$sql->execute();
		
			return $sql->fetchAll();
		
		}// fim Listar
		
	}
	

?>