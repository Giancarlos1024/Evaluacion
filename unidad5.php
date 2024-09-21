<?php session_start();?>
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
		<?php include("botonera.php");?>
	</nav>
	</header>
	<section>
		
 <?php
		function greatcaptcha(){
			$texto="mariasofiajuliamartacarlalauraloremirta";
			$micaptcha='';
			for ($u=0; $u < 6; $u++){ 
				$micaptcha.=$texto[rand(0,38)];
			}
			return $micaptcha;
		}
		$_SESSION['captcha']=greatcaptcha();
		?>

		<h2>Consultas</h2>
		<form action="componentes/cargar.php"method="POST">
		<input type="text"placeholder="Nombre" name="nombre" maxlength="30"recuired>
		<input type="text"placeholder="Apellido" name="apellido" maxlength="50" required>
		<input type="email" placeholder="Correo Electrónico" name="correo" maxlength="100" required> 
		<textarea rows="5" placeholder="Dejanos tu consulta" name="consulta" maxlength="255" required></textarea>
		<input type="text" placeholder="CodigoCaptcha" name="codigo" recuired >
		<img src="componentes/thecaptcha.php" alt="Captcha">
		<input type="submit" name="enviar_comentario" value="enviar consulta">
		
    </form>
	<?php 
	if(isset($_GET['error_captcha']));
	echo"<p>el capcha es incorrecto</p>";
	if(isset($_GET['ok_db']));

	
	?>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>