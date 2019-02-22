<?php
	
	class Contatoconsorcio {
	
		private $nome;
		private $telefone;
		private $email;
		private $stat;
		
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
		
		public function setEmail($email) {
		
			$this->email = $email;
			
			return $this;
		
		}
	
		public function getStat() {
		
			return $this->stat;
		
		}
		
		public function setStat($stat) {
		
			$this->stat = $stat;
			
			return $this;
		
		}

		
	}

?>