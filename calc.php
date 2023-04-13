<!DOCTYPE html>
<html>
<head>
	<title>Calculadora em PHP</title>
</head>
<body>
	<h1>Calculadora em PHP</h1>
	<?php
	
	if (isset($_POST['num1']) && isset($_POST['num2'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operacao = $_POST['operacao'];

		
		switch ($operacao) {
			case 'soma':
				$resultado = $num1 + $num2;
				break;
			case 'subtracao':
				$resultado = $num1 - $num2;
				break;
			case 'multiplicacao':
				$resultado = $num1 * $num2;
				break;
			case 'divisao':
				if ($num2 != 0) {
					$resultado = $num1 / $num2;
				} else {
					$resultado = "Erro: divisão por zero";
				}
				break;
			default:
				$resultado = "Operação inválida";
				break;
		}

		
		echo "Resultado: " . $resultado;
	}
	?>
</body>
</html>