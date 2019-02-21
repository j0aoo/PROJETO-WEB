<?php

	class Contato {

		private $nome;
		private $telefone;
		private $email;
		private $mensagem;
		
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
	
		public function getMensagem() {
		
			return $this->mensagem;
		
		}
		
		public function setMensagem($mensagem) {
		
			$this->mensagem = $mensagem;
			
			return $this;
		
		}

	}	



?>