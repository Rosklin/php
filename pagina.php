<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	

	<h1> Aula 1 - Introdução ao PHP </h1>

	<p> Uso do software Xampp e configuração do Apache. </p>

	<p> servidor web </p>

	<?php
		// comentário ...
		/*
				comentário em várias linhas
		*/
		echo "<p>Texto gerado pelo PHP.</p>"; 

		$codigo = 11;
		$descricao = "produto xyz";

		echo "<p> Codigo: $codigo <br> Descrição: $descricao </p>";
		
		$x = 10;
		$y = 5;
		$z = $x * $y;
		$r = 1.2e5;

		echo "O resultado de $x * $y é ".$z."<br>";
		echo "O valor de r é $r <br>";

		// Arrays

		$cor[0] = "verde";
		$cor[1] = "azul";
		$cor[2] = "amarelo";

		$item["fruta"] = "maça";
		$teste = $item["fruta"];

		echo "Fruta é $teste <br>";

		$vetor = array("fruta" => "laranja", 
					   "legume" => "cenoura",
						1 => 2e3, 
						true => "verdade");

		$teste = $vetor[true];
		echo "O valor de teste é $teste. <br>";

		var_dump($vetor);

		$cidades = array("Bambui", "Belo Horizonte", "Arcos", "Medeiros");

		echo "<br>";

		var_dump($cidades);

		$vetor = array ("a", 
						"b",
						9 => "c",
						"d");
		echo "<br>";

		unset($vetor[9]);
		$vetor[7] = 50;

		var_dump($vetor);

		$numeros = array(1, 3, 5, 7, 9);

		echo "<br> Valores de vetor (foreach): <br>";
		foreach ($numeros as $key => $value) {
			echo "key = " . $key . " value = " . $value . "<br>";
		}

		echo "<br> Valores de vetor (for ...): <br>";
		for($i=0; $i < count($numeros); $i++) {
			echo "key = " . $i . " value = " . $numeros[$i] . "<br>";
		}

		for($i=0; $i<10; $i++) {
			$itens[$i] = $i*100;
		}

		var_dump($itens);

		function exibeMatriz($matriz) {
			echo "<br> Exibe matriz: <br>";
			$m = count($matriz);
			$n = count($matriz[0]);
			for($i=0; $i<$m; $i++) {
				for($j=0; $j<$n; $j++) {
					echo $matriz[$i][$j] . " ";
				}
				echo "<br>";
			}
		}


		// Define variável global $matriz.
		for ($i=0; $i < 10; $i++) { 
			for ($j=0; $j < 5; $j++) { 
				$temp[$j] = 1;
			}
			$matriz[$i] = $temp;
		}

		exibeMatriz($matriz);

		//var_dump($matriz);

		$registro = array('nome' => 'Jose', 
						   'idade' => 30,
							'cpf' => '0201020302');

		//var_dump($registro);
		echo "Nome: " . $registro['nome'] . "<br>";
		echo "Idade: " . $registro['idade'] . "<br>";
		echo "CPF: " . $registro['cpf'] . "<br>";

		$vetor = array(0 => 'verde', 1 => 'fusca', 2 => 'laranja');

		$novoVetor = array ('a', 'b', 'c');

		list($cor, $carro, $fruta) = $vetor;

		echo $cor . " " . $carro . " " . $fruta;


		// Tipos de dados
		$var = "1"; // string
		$var = $var + "2"; // integer
		$var = $var . "0";
		$var = $var . "teste2";
		$numero = 3 + 1.5;
		$numero = 3 + "-1.4e3";

		$numero = (int) $var;
		settype($var, int);

		echo "<br> Conteudo de var: " . $var;
		echo "<br> Conteudo de numero: " . $numero;

		// Operadores aritméticos: + , - , * , / , %.

		$mod = 10 / 4;
		echo "<br> O módulo é: " . $mod;

		// Operador para concatenar Strings: .
		$var = "<br>" . "texto" . "<br>"; 

		// Operadores de atribuição: =, +=, -=, ...
		$n = 5;
		$n %= 3;
		$n++;
		$n += 7;
		echo "<br> O valor de n é: " . $n . "<br>";

		// Operadores bit a bit: &, |, ^
		$x = 5;
		$y = 3;
		$z = $x ^ $y;
		echo "<br> O valor de z é: " . $z . "<br>";

		// Operadores lógicos: && (and), ||, !
		$a = true;
		$b = false;
		$c = true && false;
		
		if ($c) echo "<br> O valor de c é true<br>";
		else echo "<br> O valor de c é false<br>";

		/* Operadores de comparação:
			== (igual)
			!= (diferente)
			<
			>
			<=
			>=
		*/

		// Condicional
		$x = 5;
		if ($x < 0) {
			$n = 5;
		} else {
			$n = 7;
		}

		$n = ($x > 2) ? 5 : 7;

		echo "<br> O valor de n é igual a " . $n;

		$a = $b = $c = -3;

		echo "<br> Os valores de a, b e c são: " . $a . " " . $b . " " . $c . "<br>";

		// Estrutura condicional
		if ($a == $b) {
			echo "<br> a e b são iguais. <br>";
		} elseif ($a < $b) {
			echo "<br> a é menor que b <br>";
		} else {
			echo "<br> a é maior que b </br>";
		}

		if ($a == $b) 
			echo "As variaveis a e b possuem mesmo valor.";


		switch ($a) {
			case 0:
				echo "a é igual a 0.";
			case 1:
				echo "a é igual a 1.";
			case 2:
				echo "a é igual a 2.";
			default:
				echo "a < 0 ou a > 2";
		}

		$a = 1;
		while ($a <= 10) {
			echo $a . "<br>";
			$a++;
		}

		for($a = 1; $a <= 10; $a++) {
			echo $a . "<br>";
		}

		function multiplica(&$v, $m) {
			$t = count($v);
			for($i=0; $i<$t; $i++) {
				$v[$i] *= $m;
			}
		}

		$v = array(3, 5, 7);

		multiplica($v, 2);
		multiplica($v, 3);

		for ($i=0; $i < count($v); $i++) { 
			echo "v() * 2 = " . $v[$i] . "<br>";
		}


	?>


</body>
</html>