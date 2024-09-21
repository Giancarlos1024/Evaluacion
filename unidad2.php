<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Eventos</h2>
		<div>
			<h3>Tus proximos Eventos!</h3>
		<p style="color: red;">incerta los datos en el fichero.</p>
		<form action="componentes/calculo_fecha.php" method="POST">
			<input type="number" name="dia" placeholder="dia" min="1" max="31" required>
			<input type="number" name="mes" placeholder="mes" min="1" max="12" required>
			<input type="number" name="anio" placeholder="año" min="2000" max="2088"required>
			<input type="submit" name="calcular_fecha" value="calcular fecha"></form>

			<?php date_default_timezone_set("America/Argentina/Buenos_Aires");?>
			<p style="color:red;">Fecha y Hora actual: <?php echo date("d/m/Y G:i")?></p> 
			
			<?php
if(isset($_GET['Finalizado'])) {
	echo "<p>El evento ya fue concluido.</p>";
}

if(isset($_GET['dias'])) {
	echo "<p>Faltan ".$_GET['dias']." días para el evento.</p>";
}
?>

		</div>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>