<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		class Pessoa {
			private $_nome;
			private $_idade;
			private $_email;
			public $info = "Informações sobre a classe Pessoa"	;

			public function __construct($nome, $idade, $email) {
				$this->_nome = $nome;
				$this->_idade = $idade;
				$this->_email = $email;
			}

			public function setNome($nome) {
				$this->_nome = $nome;
			}

			public function getNome() {
				return $this->_nome;
			}

			public function setIdade($idade) {
				$this->_idade = $idade;
			}

			public function getIdade() {
				return $this->_idade;
			}

			public function setEmail($email) {
				$this->_email = $email;
			}

			public function getEmail() {
				return $this->_email;
			}

		}

		$pessoa1 = new Pessoa("", 0, "");
		//$pessoa1->_nome = "Ana Claudia";

		$pessoa1->setNome("Ana Claudia");
		echo "O nome definido é " . $pessoa1->getNome() . "<br>";

		$pessoa2 = new Pessoa("", 0, "");
		$pessoa2->setNome("Ana Flávia");
		$pessoa2->setIdade(20);

		echo "Pessoa2: " . $pessoa2->info . "<br>";


		echo "A " . $pessoa1->getNome() . " tem " . $pessoa1->getIdade() . " anos. <br>";

		echo "A " . $pessoa2->getNome() . " tem " . $pessoa2->getIdade() . " anos. <br>";

		//var_dump($pessoa1);

		$pessoa3 = new Pessoa("Ana", 30, "ana@gmail.com");
		echo "A " . $pessoa3->getNome() . " tem " . $pessoa3->getIdade() . " anos e seu e-mail é " . $pessoa3->getEmail() . " . <br>";



	?>

</body>
</html>
