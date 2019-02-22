<?php
	
	class Marca {
	
		private $Nome;
		
		public function getNome() {
		
			return $this->nome;
		
		}
		
		public function setNome($nome) {
		
			$this->nome = $nome;
			
			return $this;
		
		}
		
	}

?>