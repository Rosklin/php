<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		echo "<h1> Aula sobre funções </h1>";

		// passagem de parametro por valor.
		function soma($x, $y) {
			return $x + $y;
		}
		$z = soma(10, 5);
		echo "<br> A variavel z = $z </br>";

		// passagem de parametro por referencia.
		function adiciona10(&$x) {
			$x = $x + 10;
			echo "<br> Dentro da função, a variave x = $x </br>";
		}

		// escopo de variáveis
		$z = 30;
		adiciona10($z);
		echo "<br> A variavel z = $z </br>";


		$nome = "Ana";
		function teste() {
			$var_local = "variavel local";
			global $nome;
			echo "<br> O nome dela é $nome </br>";
		}

		teste();

		// echo "<br> $var_local </br>"; 
		// Não é possível acessar variável local fora da função em que ela está definida.


		// Constantes
		define("pi", 3.141592);

		$raio = 3;
		$comprimento = 2 * pi * $raio;
		$area = pi * $raio * $raio;

		echo "<br> Raio = $raio -> comprimento = $comprimento -> area = $area </br>";

	?>

</body>
</html>