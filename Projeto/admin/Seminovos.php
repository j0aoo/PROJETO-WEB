<?php
	
	class Seminovos {
	
		private $nome;
		private $ano;
		private $preco;	
		private $km;
		private $versao;
		private $cor;
		private $marca;
		private $nomeImage;
		private $nomeImage2;
		private $nomeImage3;
		private $nomeImage4;
		
		public function getNome() {
		
			return $this->nome;
		
		}
		
		public function setNome($nome) {
		
			$this->nome = $nome;
			
			return $this;
		
		}

		public function getAno() {
		
			return $this->ano;
		
		}
		
		public function setAno($ano) {
		
			$this->ano = $ano;
			
			return $this;
		
		}

		public function getPreco() {
		
			return $this->preco;
		
		}
		
		public function setPreco($preco) {
		
			$this->preco = $preco;
			
			return $this;
		
		}

		public function getKm() {
		
			return $this->km;
		
		}
		
		public function setKm($km) {
		
			$this->km = $km;
			
			return $this;
		
		}

		public function getVersao() {
		
			return $this->versao;
		
		}
		
		public function setVersao($versao) {
		
			$this->versao = $versao;
			
			return $this;
		
		}

		public function getCor() {
		
			return $this->cor;
		
		}
		
		public function setCor($cor) {
		
			$this->cor = $cor;
			
			return $this;
		
		}

		public function getMarca() {
		
			return $this->marca;
		
		}
		
		public function setMarca($marca) {
		
			$this->marca = $marca;
			
			return $this;
		
		}

		public function getNomeImage() {
		
			return $this->nomeImage;
		
		}
		
		public function setNomeImage($nomeImage) {
		
			$this->nomeImage = $nomeImage;
			
			return $this;
		
		}

		public function getNomeImage2() {
		
			return $this->nomeImage2;
		
		}
		
		public function setNomeImage2($nomeImage2) {
		
			$this->nomeImage2 = $nomeImage2;
			
			return $this;
		
		}

		public function getNomeImage3() {
		
			return $this->nomeImage3;
		
		}
		
		public function setNomeImage3($nomeImage3) {
		
			$this->nomeImage3 = $nomeImage3;
			
			return $this;
		
		}

		public function getNomeImage4() {
		
			return $this->nomeImage4;
		
		}
		
		public function setNomeImage4($nomeImage4) {
		
			$this->nomeImage4 = $nomeImage4;
			
			return $this;
		
		}
		
		
	}

?>