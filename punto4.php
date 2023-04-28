<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Promedio</title>
	<!-- Agregar los archivos CSS de Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="text-center">Ingrese sus notas</h2>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="form-group">
						<label>Nota 1:</label>
						<input type="number" class="form-control" name="nota1" required>
					</div>

					<div class="form-group">
						<label>Nota 2:</label>
						<input type="number" class="form-control" name="nota2" required>
					</div>

					<div class="form-group">
						<label>Nota 3:</label>
						<input type="number" class="form-control" name="nota3" required>
					</div>

					<input type="submit" class="btn btn-primary" value="Calcular promedio">
				</form>
			</div>
		</div>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Obtener las notas del formulario
			$nota1 = $_POST["nota1"];
			$nota2 = $_POST["nota2"];
			$nota3 = $_POST["nota3"];

			// Calcular el promedio general
			$promedio = ($nota1 + $nota2 + $nota3) / 3;
			?>

			<div class="row mt-5">
				<div class="col-md-6 offset-md-3">
					<h2 class="text-center">Promedio General</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Nota 1</th>
								<th>Nota 2</th>
								<th>Nota 3</th>
								<th>Promedio</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $nota1; ?></td>
								<td><?php echo $nota2; ?></td>
								<td><?php echo $nota3; ?></td>
								<td><?php echo $promedio; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php
		}
		?>

	</div>