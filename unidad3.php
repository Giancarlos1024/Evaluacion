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
		<h2>Comentarios</h2>
   
		
		<form action="componentes/comentarios.php" method="POST">
               <input type="text" placeholder="Nombre y Apellido" name="nombreApellido" minlength="3" maxlength="60" required> 
               
               <input type="email" placeholder="Correo Electrónico" name="correo" maxlength="100" required> 

               <textarea rows="4" placeholder="Dejanos tu comentario" name="comentario" maxlength="255" required></textarea>
        
               <input type="submit" name="enviar_comentario" value="enviar comentario">
			   </form>
         
			<?php
			  
    
    $textone= fopen('componentes/comentarios.txt','r');
    
    fpassthru($textone);
    fclose($textone);
	
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