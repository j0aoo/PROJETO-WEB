<?php

	class Admin {

		private $login;
		private $senha;
		
		public function getLogin() {
		
			return $this->login;
		
		}
		
		public function setLogin($login) {
		
			$this->login = $login;
			
			return $this;
		
		}

		public function getSenha() {
		
			return $this->senha;
		
		}
		
		public function setSenha($senha) {
		
			$this->senha = $senha;
			
			return $this;
		
		}

	}
	
?>