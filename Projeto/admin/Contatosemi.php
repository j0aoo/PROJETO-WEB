<?php 

	class ContatoPecas {

		private $nome;
		private $telefone;
		private $email;
		
		public function getNome() {
		
			return $this->nome;
		
		}
		
		public function setNome($nome) {
		
			$this->nome = $nome;
			
			return $this;
		
		}
		public function getTelefone() {
		
			return $this->telefone;
		
		}
		
		public function setTelefone($telefone) {
		
			$this->telefone = $telefone;
			
			return $this;
		
		}
		public function getEmail() {
		
			return $this->email;
		
		}
		
		public function setEmail($Email) {
		
			$this->email = $email;
			
			return $this;
		
		}
	}

?>