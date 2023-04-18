<!DOCTYPE html>
<html>
<head>
	<title>Comparar valores, pero más complejo.</title>
</head>
<body>
	<form method="post">
		<label for="valor1">Introduzca el valor 1:</label>
		<input type="number" name="valor1" id="valor1"><br><br>
		<label for="valor2">Introduzca el valor 2:</label>
		<input type="number" name="valor2" id="valor2"><br><br>
		<input type="submit" value="Comparar">
	</form> 
	<?php
	if (isset($_POST['valor1']) && isset($_POST['valor2'])) {
		$valor1 = $_POST['valor1'];
		$valor2 = $_POST['valor2']; 

		if ($valor1 < $valor2) {
			echo "El valor dos es mayor que el uno.";
		} else if ($valor1 > $valor2) {
			echo "El valor uno es mayor que el dos.";
		} else if ($valor1 == $valor2) {
			echo "El valor uno y dos son iguales.";
		}
	}
	?>
</body>
</html>